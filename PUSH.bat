git init
git remote remove origin
git remote add origin "https://github.com/jhonerickdomingues/framework_api.git"
git config --global user.name "Jhon Erick Domingues"
git config --global user.email "jhonerick_10@hotmail.com"
git pull origin master
git add --all
git commit -m "first commit"
@echo off
git push origin master
pause