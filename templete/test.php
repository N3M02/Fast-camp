    <script src="https://cdn.tailwindcss.com"></script>
<?php
session_start();
// Mock session for demo - remove in production
// $_SESSION['user_id'] = 1;
// $_SESSION['user_name'] = 'สมชาย';

//$isLoggedIn ไว้เช็คว่ามีการlogin แล้วหรือยัง
$isLoggedIn = isset($_SESSION['user_id']); 
//$userName เก็บชื่อ user
$userName = $_SESSION['user_name'] ?? '';

// Mock activity data
$activities = [
    ['id' => 1, 'title' => 'ค่ายเชียนโปรแกรมพื้นฐาน', 'desc' => 'พื้นฐานสำคัญสำหรับนักพัฒนาโปรแกรมรุ่นใหม่ เรียนรู้ง่าย สนุกได้ความรู้', 'location' => 'กทม. IT4SU', 'tag' => 'โค้ด', 'slots' => 24],
    ['id' => 2, 'title' => 'Openhouse', 'desc' => 'พื้นฐานสำคัญสำหรับนักพัฒนาโปรแกรมรุ่นใหม่ เรียนรู้ง่าย สนุกได้ความรู้', 'location' => 'กทม. IT4SU', 'tag' => 'โค้ด', 'slots' => 18],
    ['id' => 3, 'title' => 'ค่ายเชียนโปรแกรมพื้นฐาน', 'desc' => 'พื้นฐานสำคัญสำหรับนักพัฒนาโปรแกรมรุ่นใหม่ เรียนรู้ง่าย สนุกได้ความรู้', 'location' => 'กทม. IT4SU', 'tag' => 'โค้ด', 'slots' => 30],
    ['id' => 4, 'title' => 'ค่ายเชียนโปรแกรมพื้นฐาน', 'desc' => 'พื้นฐานสำคัญสำหรับนักพัฒนาโปรแกรมรุ่นใหม่ เรียนรู้ง่าย สนุกได้ความรู้', 'location' => 'กทม. IT4SU', 'tag' => 'โค้ด', 'slots' => 12],
];
?>