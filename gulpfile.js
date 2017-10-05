const gulp = require('gulp')
const zip  = require('gulp-zip')
const sass = require('gulp-sass')
const maps = require('gulp-sourcemaps')

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
      .pipe(gulp.dest('.'))
})

gulp.task('css', () => {
  const input  = './styles/scss/main.scss'
  const output = './styles/css'
  gulp.src(input)
      .pipe(maps.init())
      .pipe(sass().on('error', sass.logError))
      .pipe(maps.write('.'))
      .pipe(gulp.dest(output))
})

gulp.task('css:watch', [ 'css' ], () => {
  const input = [ './styles/scss/**/*.scss' ]
  gulp.watch(input, [ 'css' ])
})
