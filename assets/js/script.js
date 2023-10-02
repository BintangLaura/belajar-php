//print Hello World
console.log("Hello World");

//Coba baris dengan (;) dan tanpa (;)
console.log("Hello World"); //alert("hello world");

console.log("Hello World")
//alert("Hello World") //alert dijalankan saat file pertama kali dibuka

//mencoba berbagai variabel
var nama = "Bintang Laura";
let nim = 10210016;
const alamat = "Bogor";

console.log(nama);
console.log(nim);
console.log(alamat);

//Tipe Data Number
let n = 25;
n = 30;
console.log(n);

// number (infinity)
let inf = 100/0;
console.log(inf);

//number (NaN)
console.log("Bintang" + 1); //tetep bisa
console.log("SIB Arkatama" + (2 * 5)); // tetep bisa juga
console.log(NaN * 3);

//Tipe data BigInt
const bigInt = 9007199254740991n;
console.log(bigInt);

//Tipe data string
const a = "Bintang";
const b = 'Laura';
const c = `Anjani`;

console.log(a);
console.log(b);
console.log(c);

const ismi = "Bintang";
console.log(`Hello, ${ismi}`);

const p = 100;
const l = 50;
console.log(`Pesedi Panjang itu memiliki ukuran ${p} * ${l}`);

//tipe data Boolean
let isLoggedIn = true;
let isAdmin = false;
console.log(isLoggedIn);
console.log(isAdmin);

let benar = 20 > 2;
let salah = 20 < 2;
console.log(benar);
console.log(salah);

//tipe data null
let nu = null;
console.log(nu);

//tipe data undefined
let un;
console.log(un);

//tipe data symbol
let karyawan = Symbol('Bintang');
console.log(karyawan);
console.log(karyawan.description);

//tipe data objek
let pekerja = {
    nama: "Bintang",
    usia: 19,
    pekerjaan: "Staff Consultant",
    statusPernikahan: false,
    hobi: ["Membaca", "Memancing", "Menonton Film"],
};
console.log(`Namaku adalah ${pekerja.nama}. Saya berusia ${pekerja.usia} tahun. Saya sangat suka dengan ${pekerja.hobi}.`);

//Conversion
//Str Conversion
//Before String Conversion
value = 123;
//alert(typeof value);
console.log(typeof value);

//After String Conversion
value = String(123);
//alert(typeof value);
console.log(typeof value);

//Num Conversion
//Before Num Conversion
let bfr = 123;
//alert(typeof bfr);
console.log(typeof bfr);

//After Num Conversion 
let str = "123";
//alert(typeof str);
console.log(typeof str);

let num = Number(str);
//alert(typeof num);
console.log(typeof num);

//NaN Conversion
let age = Number("an arbitrary string instead of a number");
//alert(typeof age);
console.log(age);

//boolean conversion
let coba = Boolean("hello");
console.log(coba);

let coba2 = Boolean();
console.log(coba2);

//Operator Aritmatika
let d = 60;
let e = 4;
console.log(d + e);//jumlah
console.log(d - e);//kurang
console.log(d * e);//kali
console.log(d / e);//bagi
console.log(d ** e);//pangkat
console.log(d % e);//modulus

//Operator Assignment
let f = 5;
console.log(f);

f += 5;//isi dan tambahkan
console.log(f);

f -= 3;//isi dan kurangkan
console.log(f);

f *= 10;//isi dan kalikan 
console.log(f);

f /= 7;//isi dan bagikan
console.log(f);

f **= 2;//isi dan pangkatkan
console.log(f);

f %= 10;//isi dan moduluskan
console.log(f);

//Operator perbandingan
let g = 13;
let h = 15;

console.log(g == h);
console.log(g > h);
console.log(g < h);
console.log(g != h);
console.log(g >= h);
console.log(g <= h);

//operator logika
let i = false;
let j = true;

console.log(i && j);
console.log(i || j);
console.log(!i);

//Operator Bitwise
let k =  "010"; // --> 010
let m =  "011"; // --> 011 
                // ---------- &
                // --> 010                        
console.log(k & m);

let o = "111";// --> 111
let q = "101";// --> 101
              // ---------- |
              // --> 111

console.log(o | q);

let r = "100"; // --> 100
let s = "110"; // --> 110
               // --------- ^
               // --> 010

console.log(r ^ s);

let t = "011"; // --> 011
               // ---------- ~
               // --> 100
console.log(~t);

//Operator Ternary
 let u = 3;
 let v = 3;

 console.log(u = v ? "yes" : "no");

//Alert
 alert("Selamat Datang Di Web Kami");
 alert ("Sekarang Tanggal: " +new Date());

 // Prompt
 let response = prompt("Apakah kamu mau nonton akhir pekan ini?");
 alert("Jawabannya adalah " + response);

 // Confirm 
 let responses = confirm("Mau dinner malam ini?");
 alert("Jawabannya " + responses);

 // Conditional Branching 
 // If
 let jawab = prompt("1 + 1 =");
 if (jawab == 2) {
    alert("Benar!");
 }
 
 //If - Else
 let Jawab = prompt("7 * 5 =");
 if (Jawab == 35) {
    alert("Benar!");
 } else {
    alert("Salah!");
 }
 
 //Else - If
 let Jawab1 = prompt("50 / 5 =");
 if (Jawab1 == 10) {
    alert("Benar");
 } else if(Jawab1 < 10){
    alert("Terlalu Rendah");
 } else {
    alert("Telalu Tinggi");
 }

 //Switch
 let color = "Blue";

 switch (color) {
    case "red":
        alert("I Love Red");
        break;
    case "blue":
        alert("I Love Blue");
        break;
    default:
        alert("I don't know what color it is!");
        break;
 }

 //Looping
 //For
 for (let z = 0; z < 10; z++) {
    console.log(`Iterasi For ke ${z}`);  
 }

 //Do .. While
 let y = 0;
 do {
    y += 1;
    console.log(`Iterasi Do .. While ke ${y}`);
 } while (y < 5);

 //While 
 let x = 0;

 while (x < 8) {
    console.log(`Iterasi While ke ${x}`);
    x++;
 }

 //Break 
 for (let I = 0; I < 6; I++) {
    if (I == 4) {
        break;
    }
    console.log(`Iterasi Break ke ${I}`);
 }

 //Continue
 for (let L = 0; L < 6; L++) {
    if (L == 4) {
        continue;
    }
    console.log(`Iterasi Continue ke ${L}`);
 }
