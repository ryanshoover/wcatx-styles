# WCATX-Styles
Custom styles for WordCamp Austin 2017
https://2017.austin.wordcamp.org

## Installation
Clone this repo into your plugins folder.

```bash
git clone git@github.com:ryanshoover/wcatx-styles.git wp-content/plugins/wcatx-styles
```

Activate the plugin.

```bash
wp plugin activate wcatx-styles
```
Install the dependencies.

```bash
cd wp-content/plugins/wcatx-styles
npm install
```

## Usage
The sass files are compiled using gulp.

### Gulp Watch
Runs a watch command that will compile the CSS file whenever a SASS file changes

```bash
gulp
```
### Gulp CSS
Compile the CSS file from the SASS file once

```bash
gulp css
```
