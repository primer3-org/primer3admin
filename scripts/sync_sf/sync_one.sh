#!/bin/bash

if [ $# -ne 3 ]
then
    echo "Usage: $0 <basedir> <github> <sourceforge>"
    echo ""
    exit -1
fi

BASEDIR=$1
GITHUB=$2
SOURCEFORGE=$3

# Update
echo Update $BASEDIR
cd $BASEDIR
git pull origin main
git pull --all
git pull --tags
git fetch --tags

# Rebase
echo Sync SF $BASEDIR
git remote set-url origin $SOURCEFORGE
git push origin main
git push --tags

# Rebase back
git remote set-url origin $GITHUB
cd ..



