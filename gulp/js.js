var gulp = require('gulp');

var jsPaths = [
	'./js/**/*.js'
];

gulp.task('js', function(){
	return gulp.src(jsPaths)
  	.pipe(gulp.dest('./.tmp/js'))
});
