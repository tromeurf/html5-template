module.exports = function(grunt) {
	var mode = 'dev'; // or 'prod'

	var watchActions;

	if (mode == 'dev') {
		watchActions = ['concat'];
	}
	if (mode == 'prod') {
		watchActions = ['concat', 'uglify'];
	}

	// 1. All configuration goes here
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		compass: {
			dist: {
				options: {
					config: 'config.rb'
				}
			}
		},
		concat: {
			// 2. Configuration for concatinating files goes here.

			options: {
				stripBanners: true,
				banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' +
				'<%= grunt.template.today("yyyy-mm-dd") %> */\n\n\n\n'+
				'/*----------------------------------------------*/\n'+
				'/*DONT TOUCH THIS FILE, ITS COMPILED WITH GRUNT*/\n'+
				'/*IF YOU HAVE TO DO JS, DO IT IN R9 REPO*/\n'+
				'/*----------------------------------------------*/\n\n\n\n'+
				'var $ = jQuery.noConflict();\n\n',
			},
			dist: {
				src: [
					'media/js/vendors/*.js', // All JS in the libs folder
					'media/js/r9/*.js'
				],
				dest: 'media/js/scripts.min.js',
			}
		},
		uglify: {
			options: {
				banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' +
				'<%= grunt.template.today("yyyy-mm-dd") %> */\n\n',
			},
			build: {
				src: 'media/js/scripts.min.js',
				dest: 'media/js/scripts.min.js'
			}
		},
		imagemin: {
			dynamic: {
				files: [{
					expand: true,
					cwd: 'media/images/',
					src: ['**/*.{png,jpg,gif}'],
					dest: 'media/images/'
				}]
			}
		},
		watch: {
			options: {
				livereload: true
			},
			scripts: {
				files: [
					'media/js/fallbacks/*.js',
					'media/js/vendors/*.js',
					'media/js/r9/*.js'
				],
				tasks: watchActions
			},
			sass: {
				options: {
					livereload: false
				},
				files: [
					'media/sass/*.scss',
					'media/sass/vendors/*.scss',
					'media/sass/components/*.scss'
				],
				tasks: ['compass']
			},
			css: {
				files: [
					'media/css/*.css'
				],
				tasks: []
			},
			php: {
				files: [
					'*.php',
					'inc/*.php'
				]
			} 
		},
		cssmin: {
			target: {
			    files: [{
			      expand: true,
			      cwd: 'media/css',
			      src: ['*.css'],
			      dest: 'media/css'
			    }]
			}
		}
	});

	// 3. Where we tell Grunt we plan to use this plug-in.
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-cssmin');

	// 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
	if (mode == 'dev') {
		grunt.registerTask('default', ['compass', 'concat', 'uglify', 'cssmin', 'imagemin']);
	}

	if (mode == 'prod') {
		grunt.registerTask('default', ['compass', 'concat', 'uglify', 'cssmin', 'imagemin']);
	}

};