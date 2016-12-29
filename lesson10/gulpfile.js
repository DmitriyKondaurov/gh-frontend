var gulp        = require('gulp'),
    sass        = require('gulp-sass'),
    concat      = require('gulp-concat'),
    uglify      = require('gulp-uglify'),
    cssnano     = require('gulp-cssnano'),
    rename      = require('gulp-rename');
del         = require('del');

gulp.task('sass', function() {
    return gulp.src('src/sass/*.+(scss|sass)')
        .pipe(sass())
        .pipe(gulp.dest('src/css'))
});

gulp.task('scripts', function() {
    return gulp.src([
        'bower_components/jquery/dist/jquery.min.js',
        'bower_components/magnific-popup/dist/jquery.magnific-popup.min.js',
        'bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js',
    ])
        .pipe(concat('libs.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('src/js'));
});

gulp.task('css-libs', function() {
    return gulp.src('src/css/libs.css')
        .pipe(cssnano())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('src/css'));
});

gulp.task('build', ['clean', 'sass', 'scripts'], function () {

    var buildCss = gulp.src([
        'src/css/main.css',
        'src/css/libs.min.css',
    ])
        .pipe(gulp.dest('dist/css'));

    var buildFonts = gulp.src('src/fonts/**/*')
        .pipe(gulp.dest('dist/fonts'));

    var buildJs = gulp.src('src/js/**/*.js')
        .pipe(gulp.dest('dist/js'));

    var buildImg = gulp.src('src/img/**/*')
        .pipe(gulp.dest('dist/img'));

    var buildHtml = gulp.src('src/*.html')
        .pipe(gulp.dest('dist'));
});
//перед watch clean
gulp.task('clean', function () {
    return del.sync('dist');
});

