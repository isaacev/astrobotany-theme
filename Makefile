SASS_CMD   := sass
SASS_BUILD := $(SASS_CMD)
SASS_WATCH := $(SASS_CMD) --watch
SASS_MAIN  := styles/scss/main.scss
SASS_DEST  := styles/css/main.css

build:
	$(SASS_BUILD) $(SASS_MAIN):$(SASS_DEST)

watch:
	$(SASS_WATCH) $(SASS_MAIN):$(SASS_DEST)
