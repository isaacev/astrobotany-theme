const fs   = require('fs')
const gulp = require('gulp')
const zip  = require('gulp-zip')
const maps = require('gulp-sourcemaps')
const sem  = require('semver')
const pkg  = require('./package.json')

function replace (oldVer, newVer) {
  return (filename) => {
    return new Promise((resolve, reject) => {
      fs.readFile(filename, 'utf8', (err, data) => {
        if (err) {
          reject(err)
          return
        }

        const bumped = data.replace(oldVer, newVer)

        fs.writeFile(filename, bumped, (err) => {
          if (err) {
            reject(err)
          } else {
            resolve()
          }
        })
      })
    })
  }
}

gulp.task('bump', () => {
  const oldVer = pkg.version
  const newVer = sem.inc(oldVer, 'patch')

  const inputs = [
    './style.css',
    './package.json',
    './functions.php',
  ]

  return Promise.all(inputs.map(replace(oldVer, newVer)))
})

gulp.task('zip', () => {
  const include = [
    '**/*.css',
    '**/*.php',
    './style.css',
    '**/*.{jpg,png,svg}',
  ]

  const exclude = [
    'node_modules/**/*',
    'releases/**/*',
  ]

  gulp.src(include.concat(exclude.map(p => '!' + p)))
      .pipe(zip(`./releases/astrobotany-theme.zip`))
      .pipe(gulp.dest('.'))
})
