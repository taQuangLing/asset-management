Cách khởi chạy ứng dụng: 
1. Config database: 
    - Tạo 1 db mới, đặt tên là: asset_management
    - Cập nhật username, và password vào file .env
    
2. Khởi tạo db: 
 - Chạy câu lệnh sau để khởi tạo db:
   + php artisan migrate:fresh --seed
   
3. Chạy server: 
- Chạy câu lệnh sau để khởi chạy server: 
  + php artisan serv 
