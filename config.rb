environment = :development
# environment = :production

# Set this to the root of your project when deployed:
http_path = "/integration/"
css_dir = "media/css"
sass_dir = "media/sass"
images_dir = "media/images"
javascripts_dir = "media/js"


#add_import_path "/var/lib/gems/1.8/gems/compass-rgbapng-0.2.1/lib/"
#add_import_path "/usr/local/rvm/gems/ruby-1.9.3-p551/gems/gridle-1.3.33/lib/"

require "rgbapng"
require "gridle"
require File.join(File.dirname(__FILE__), "media/sass/extensions/functions.rb")

# You can select your preferred output style here (can be overridden via the command line):
# output_style = :expanded or :nested or :compact or :compressed
output_style = (environment == :development) ? :expanded : :compressed

# To enable relative paths to assets via compass helper functions. Uncomment:
relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
# line_comments = false

sass_options = (environment == :development) ? {:debug_info => false} : {:always_update => true}

# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass sass scss && rm -rf sass && mv scss sasss
