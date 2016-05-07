var gulp = require('gulp');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');

var jsPaths = [
	'./node_modules/jquery/dist/jquery.min.js',
	'./js/**/*.js'
];

gulp.task('js', function(){
	return gulp.src(jsPaths)
		.pipe(concat('bundle.js'))
		//.pipe(uglify())
  	.pipe(gulp.dest('./'))
});
