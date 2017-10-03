const gulp = require('gulp')
const zip  = require('gulp-zip')

gulp.task('bundle', () => {
  const include = [
    '**/*.css',
    '**/*.php',
    './style.css',
    './screenshot.png',
  ]

  const exclude = [
    'node_modules/**/*'
  ]

  gulp.src(include.concat(exclude.map(p => '!' + p)))
      .pipe(zip('astrobotany-theme.zip'))
      .pipe(gulp.dest('/Users/isaac/Desktop/workspace'))
})
