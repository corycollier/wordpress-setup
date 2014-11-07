module.exports = function(grunt) {
  grunt.initConfig({
    pkg   : grunt.file.readJSON('package.json'),
    jshint: {
      files  : ['Gruntfile.js', 'src/**/*.js', 'tests/**/*.js'],
      options: {
        reporter: require('jshint-stylish'),
        curly  : true,
        eqeqeq : false,
        eqnull : true,
        browser: true,
        globals: {
          jQuery  : true,
          console : true,
          module  : true,
          document: true
        }
      }
    },
    csslint: {
      strict: {
        options: {
          import: 2
        },
        src: ["src/css/*.css"]
      }
    },
    qunit: {
      files: ['tests/*.html']
    }
  });

  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-csslint');
  grunt.loadNpmTasks('grunt-contrib-qunit');

  grunt.registerTask('default', ['jshint', 'csslint', 'qunit']);
};