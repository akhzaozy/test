@echo off
cd /d "%~dp0"

echo 🚀 Auto push ke GitHub mulai...
git add -A
git commit -m "Auto update on %date% %time%"
git pull origin main --rebase
git push origin main
echo ✅ Push selesai!

pause
