/*
This gulpfile :
- Minimify images
- Concat CSS files
- Add autoprefixers
- Minimify CSS files
- Concat JS files
*/

// Configurations
var config = {
    'root': 'dist/',
    'src' : 'src/',
    'dist': 'dist/'
};


// Dependencies
var gulp          = require( 'gulp' ),
    css_nano      = require( 'gulp-cssnano' ),
    rename        = require( 'gulp-rename' ),
    plumber       = require( 'gulp-plumber' ),
    sass          = require( 'gulp-sass' ),
    autoprefixer  = require( 'gulp-autoprefixer' ),
    concat        = require( 'gulp-concat' ),
    imagemin      = require( 'gulp-imagemin' ),
    uglify        = require( 'gulp-uglify' );



// Connect
gulp.task('connect', function() {
    connect.server({
        root: 'dist',
        livereload: true
    });
});


// PHP
gulp.task('php', () => {
    return gulp.src( [
        './src/**/*.php'
        ] )
        .pipe(gulp.dest('./dist/'));
})


// Images
gulp.task('img', () => {
    return gulp.src( [
        './src/images/**/**'
        ] )
        .pipe(imagemin())
        .pipe(gulp.dest('./dist/images/'));
})


// Sounds
gulp.task('sounds', () => {
    return gulp.src( [
        './src/sounds/**'
        ] )
        .pipe(gulp.dest('./dist/sounds/'));
})


// Sass
gulp.task( 'sass', function()
{
    return gulp.src( './src/styles/*.scss' )      // Get Sass files
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(rename(function (path) {
            path.basename += '.min';
        }))
        .pipe(gulp.dest('./dist/styles'))
} );


// JS task
gulp.task( 'js', function()
{
    return gulp.src( ['./src/scripts/*.js'] )        // Get JS files
        .pipe( concat( 'script.js' ) )     // Concat in one file
        .pipe( uglify() )                // Minify them (problem with ES6)
        .pipe( gulp.dest( './dist/scripts/' ) );     // Put it in folder
} );



// Watch task
gulp.task( 'watch', function()
{
    gulp.watch( './src/style/**/**', [ 'sass' ] );
    gulp.watch( './src/scripts/**/**', [ 'js' ] );
    gulp.watch( './src/**/*.php', [ 'php' ] );
    gulp.watch( './src/images/**/**', [ 'img' ] );
    gulp.watch( './src/sounds/**/**', [ 'sounds' ] );
} );



gulp.task( 'default', [ 'php', 'sass', 'js', 'img', 'sounds', 'watch' ] );
