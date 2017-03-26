var gulp            = require('gulp'),
    sass            = require('gulp-sass'),
    concat          = require('gulp-concat'),
    uglify          = require('gulp-uglify'),
    cssnano         = require('gulp-cssnano'),
    rename          = require('gulp-rename'),
    browserSync     = require('browser-sync'),
    del             = require('del'),
    postcss         = require('gulp-postcss'),
    sourcemaps      = require('gulp-sourcemaps'),
    imagemin        = require('gulp-imagemin'),
    pngquant        = require('imagemin-pngquant'),
    cache           = require('gulp-cache'),
    autoprefixer    = require('gulp-autoprefixer');

gulp.task('sass',  function() {
    return gulp.src('./sass/*.+(scss|sass)')
        .pipe(sass())
        .pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true}))
        .pipe(gulp.dest('./'))
        .pipe(browserSync.reload({stream: true}))
});

gulp.task('css-libs', function() {
    return gulp.src([
        './bower_components/owl.carousel/dist/assets/owl.carousel.css',
        './bower_components/owl.carousel/dist/assets/owl.theme.default.css',
        './fonts/font-awesome-4.7.0/css/font-awesome.css',

    ])
        .pipe(concat('libs-style.css'))
        .pipe(cssnano())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('./'));
});

gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "localhost/wordpress/",
        notify: false,
        browser: ["chrome"]
    });
});

gulp.task('scripts', function() {
    return gulp.src([
        './bower_components/jquery/dist/jquery.min.js',
        './bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js',
        './bower_components/owl.carousel/dist/owl.carousel.min.js',
        './js/smooth_scroll.js',
        './js/main.js',
    ])
        .pipe(concat('libs.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./js/'));
});

gulp.task('build', ['sass', 'css-libs', 'scripts'], function () {});

gulp.task('watch', ['browser-sync', 'sass'], function() {
    gulp.watch('./sass/**/*.+(scss|sass)', ['sass']);
    gulp.watch('./**/*.php', browserSync.reload);
    gulp.watch('./js/**/*.js', browserSync.reload);
});

//////////////////////////////
// Default Task
//////////////////////////////

gulp.task('default', ['build']);