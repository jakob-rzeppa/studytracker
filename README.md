# Studytracker

## Create Phar when Commiting

To automaticly create the phar when commiting you need to add this hook to .git/hooks/post-commit and make the file executable.

```bash
#!/bin/sh

php ./create-phar.php

echo "Phar archive created."


git add ./build/studytracker.phar

# Prevent infinite loop by skipping hook if already running
if [ "$SKIP_POST_COMMIT" != "1" ]; then
    export SKIP_POST_COMMIT=1

    # For some reason commit with --no-verify still triggers hooks
    git commit --amend --no-verify -C HEAD
fi

echo "Phar added to commit."
```