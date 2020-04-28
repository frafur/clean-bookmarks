# clean-bookmarks
reads bookmarks file (chrome and firefox) and creates two files filtering by add_date: recent bookmarks and old bookmarks, in order to keep new bookmarks and archive old ones.

usage: php filter.php 
input: bookmarks.html (from chrome export functions in settings)
output: outputnew.html (to be imported, just new bookmarks) + outputold.html (just old bookmarks for backup)
