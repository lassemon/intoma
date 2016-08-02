var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var rename = require('gulp-rename');
var minifycss = require('gulp-csso');

gulp.task('styles', ['styles-main'], function() {
});


gulp.task('styles-main', function() {
    return gulp.src('./styles/index.scss')
	.pipe(sass({
		outputStyle: 'nested',
		includePaths: ['.'],
	}).on('error', sass.logError))
	.pipe(autoprefixer('last 2 version'))
    .pipe(rename('style.css'))
	.pipe(gulp.dest('./'))
});

gulp.task('styles2', function() {
    return gulp.src('./styles/index2.scss')
	.pipe(sass({
		outputStyle: 'nested',
		includePaths: ['.'],
	}).on('error', sass.logError))
	.pipe(autoprefixer('last 2 version'))
    .pipe(rename('style2.css'))
	.pipe(gulp.dest('./'))
});

gulp.task('styles3', function() {
    return gulp.src('./styles/index3.scss')
	.pipe(sass({
		outputStyle: 'nested',
		includePaths: ['.'],
	}).on('error', sass.logError))
	.pipe(autoprefixer('last 2 version'))
    .pipe(rename('style3.css'))
	.pipe(gulp.dest('./'))
});

gulp.task('styles4', function() {
    return gulp.src('./styles/index4.scss')
	.pipe(sass({
		outputStyle: 'nested',
		includePaths: ['.'],
	}).on('error', sass.logError))
	.pipe(autoprefixer('last 2 version'))
    .pipe(rename('style4.css'))
	.pipe(gulp.dest('./'))
});

gulp.task('styles-dist', function() {
    return gulp.src('./app/styles/main.scss')
	.pipe(sass({
		outputStyle: 'nested',
		includePaths: ['.'],
	}).on('error', sass.logError))
	.pipe(autoprefixer('last 2 version'))
    .pipe(rename('bundle.css'))
    .pipe(minifycss())
	.pipe(gulp.dest('./dist/styles'))
});
