module Sass::Script::Functions 
	# Does the supplied image exist? 
	def file_exists(image_file) 
		path = image_file.value 
		Sass::Script::Bool.new(File.exists?(path)) 
	end

	# Give the relative path
	def relative_path(path)
		Sass::Script::String.new(File.join(File.expand_path(Dir.pwd), path.value))
	end
end