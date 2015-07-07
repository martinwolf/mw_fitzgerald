var gulp = require('gulp'),
    sass = require('gulp-ruby-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    addsrc = require('gulp-add-src'),
    rename = require('gulp-rename'),
    order = require('gulp-order'),
    clean = require('gulp-clean'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    plumber = require('gulp-plumber'),
    browserSync = require('browser-sync'),
    critical = require('critical'),
    cp = require('child_process');

gulp.task('css', function() {
  return sass('scss/style.scss', { style: 'expanded' })
    .pipe(plumber())
    .pipe(autoprefixer('last 2 version', 'ie 9'))
    .pipe(gulp.dest('css-temp'))
    .pipe(rename({suffix: '.min'}))
    .pipe(minifycss())
    .pipe(gulp.dest('css-temp'))
    .pipe(gulp.dest('dist/css'))
    .pipe(browserSync.reload({stream:true}))
    .pipe(notify({ message: 'Styles task complete' }));
});

gulp.task('js', function() {
  return gulp.src('js/scripts.js')
    .pipe(jshint())
    .pipe(jshint.reporter('default'))
    .pipe(addsrc('./js/_libs/*.js'))
    .pipe(order([
            // 'js/_libs/jquery-2.1.3.js',
            'js/_libs/jquery.fitvids.js',
            'js/scripts.js'
        ], { base: './' }))
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest('js-temp'))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(gulp.dest('js-temp'))
    .pipe(gulp.dest('dist/js'))
    .pipe(notify({ message: 'Scripts task complete' }));
});

gulp.task('clean', function() {
    return gulp.src(['css-temp', 'js-temp'], {read: false})
        .pipe(clean());
});

gulp.task('img', function() {
    // TODO: image optimisation, at the moment manually with ImageOptim
    return gulp.src('images/**/*')
        .pipe(gulp.dest('dist/images'));
});

gulp.task('fonts', function() {
    return gulp.src('fonts/**/*')
        .pipe(gulp.dest('dist/fonts'));
});

/*gulp.task('critical-css', function() {
    critical.generate({
        // Your base directory
        base: '_site/',
        // HTML source file
        src: 'index.html',
        // CSS output file
        dest: 'css/critical.min.css',
        // Viewport width
        width: 1200,
        // Viewport height
        height: 900,
        // Minify critical-path CSS
        minify: true
    });
});*/


/**
 * Page reload
 */
gulp.task('files', function () {
    browserSync.reload();
});

/**
 * Launch the Server
 */
gulp.task('browser-sync', function() {
    browserSync({
        proxy: "localdomain.static",
        xip: true
    });
});

gulp.task('watch', function() {
    // Watch .scss files
    gulp.watch('scss/**/*.scss', ['css']);
    // Watch .js files
    gulp.watch('js/**/*.js', ['js']);
    // Watch .php files
    gulp.watch(['*.php', 'inc/*.php'], ['files']);
    // Watch image files
    gulp.watch('images/**/*', ['img']);
    // Watch font files
    gulp.watch('fonts/**/*', ['fonts']);
});

gulp.task('default', ['clean'], function() {
    gulp.start('browser-sync', 'watch');
});

gulp.task('build', ['clean'], function() {
    gulp.start('css', 'js', 'img', 'fonts');
});
