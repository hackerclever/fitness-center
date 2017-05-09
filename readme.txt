วิธีการติดตั้งและใช้งาน fitness center

วิธีการติดตั้ง
1. clone project จาก gitkraken (link:https://github.com/hackerclever/fitness-center.git)
2. เข้าถึง directory ของ project
3. สั่ง npm install
4. สั่ง composer install
5. สร้าง database ชื่อ fitness_data_center
user db = root , password db =
6. ใช้คำสั่ง php artisan migrate
7. ใช้คำสั่ง php artisan db:seed
จึงสามารถเรียกใช้ http://fitness-center.dev/ ได้



วิธีการใช้งาน fitness center

- ยังไม่ได้ทำการ login สามารถดู Promotions ที่มีอยู่,
 Classes ที่เปิดสอน, ชื่อ Course และวันเวลาที่เปิดสอน
 และ Contact us ที่สามารถเรียกดูได้จากทุกหน้า

- login แบบ Trainer ใช้
email : user1@gmail.com
password : 1111

- login แบบ Staff ใช้
email : user5@hotmail.com
password : 5555

การล็อกอินแบบ Trainer และ Staff สามารถเพิ่มข้อมูลได้
ยกเว้น ไม่สามารถสร้าง Staff หรือ Trainer ได้

- login แบบ Admin ใช้
email : user6@hotmail.com
password : 6666

การ login แบบ Admin สามารถเพิ่มข้อมูลได้ทั้งหมด
