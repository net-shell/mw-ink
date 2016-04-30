var gulp = require('gulp'),
	gp_concat = require('gulp-concat'),
	gp_rename = require('gulp-rename'),
	cssnano = require('gulp-cssnano'),
	gp_uglify = require('gulp-uglify');

gulp.task('js-fef', function(){
	return gulp.src([
		'vendor/net-shell/mw-ink/js/fabric.js',
		'vendor/net-shell/mw-ink/js/tshirtEditor.js',
		'vendor/net-shell/mw-ink/js/jquery.miniColors.min.js'
	])
	.pipe(gp_concat('ui.js'))
	.pipe(gulp.dest('dist'))
	.pipe(gp_rename({ suffix: '.min' }))
	.pipe(gp_uglify())
	.pipe(gulp.dest('dist'));
});

gulp.task('css-fef', function(){
	return gulp.src([
		'vendor/net-shell/mw-ink/css/jquery.miniColors.css',
		'vendor/net-shell/mw-ink/css/bootstrap.min.css',
		'vendor/net-shell/mw-ink/css/bootstrap-responsive.min.css'
	])
	.pipe(gp_concat('styles.css'))
	.pipe(gulp.dest('dist'))
});

gulp.task('default', ['js-fef', 'css-fef'], function(){});