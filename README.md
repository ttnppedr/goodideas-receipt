# 資料檔案放置路徑
- `storage/app/member.csv` : 人員資料
- `storage/app/income.csv` : 收入資料

# 人員圖片放置路徑及檔名規則
- `storage/app/public/images/{身份證字號}_1.png` : 人員正面圖片
- `storage/app/public/images/{身份證字號}_2.png` : 人員反面圖片

## 放置圖片前需先執行以下指令
`php artisan storage:link` : 建立連結

# 指令
`php artisan app:prepare-data` : 導入並複蓋所有資料
