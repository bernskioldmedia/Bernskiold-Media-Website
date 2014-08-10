module.exports = function(grunt) {

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		uglify: {
			build: {
				src: 'javascripts/scripts.js',
				dest: 'javascripts/scripts.min.js'
			}
		},

		autoprefixer: {
         dist: {
            files: {
               'stylesheets/layout.css': 'stylesheets/layout.css'
            }
         }
      },

		sass: {
			dist: {
				options: {
					style: 'compressed',
					sourcemap: true,
				},
				files: {
					'stylesheets/layout.css': 'sass/layout.scss'
				}
			}
		},

		compass: {
			dist: {
			  options: {
			    sassDir: 'sass',
			    cssDir: 'stylesheets',
			    environment: 'production',
			    outputStyle: 'compressed'
			  }
			},
	   }

		watch: {
			options: {
				livereload: true,
			},
			scripts: {
				files: ['javascripts/*.js'],
				tasks: ['uglify'],
				options: {
					spawn: false,
				}
			},
			css: {
				files: [
					'sass/*.scss',
				],
				tasks: [ 'compass', 'autoprefixer' ],
				options : {
					spawn: false,
				}
			}
		},

	});

	// Load Plugins
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-contrib-compass');

	// Run!
	grunt.registerTask('default', ['compass', 'uglify', 'watch']);

}