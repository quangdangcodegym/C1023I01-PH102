let name0 = "Tri"; // Mr Tri
let name1 = "Loc"; // Mr Loc
let name2 = "Hoang"; // Mr Hoang

    // Mảng là gì: dùng để chứa nhiều phần tử
      //   let arr = ["Tri", "Loc", "Hoang"];
      let arr1 = [name0, name1, name2];

      console.log(arr1.length);     // độ dài mảng, kích thước của mảng
      console.log(arr1[0]);     // vị trí của các phần tử, bắt đầu từ 0 -> arr.length-1
      console.log(arr1[2]);
      console.log(arr1[arr1.length - 1]);

        let arr1 = [];              // khai báo 1 mảng rỗng
        let arr2 = new Array();     // khai báo 1 mảng rỗng dùng từ khóa new

        let numbers = [7, 1, 7, 9, 4];
        for(let i = 0; i< numbers.length; i++){         // duyệt qua các phần tử của mảng
            console.log(numbers[i]);
        }

        // TÍNH TỔNG CÁC PHẦN TỬ TRONG MẢNG
        let numbers = [7, 1, 7, 9, 4, 5];
        let total = 0;
        for (let i = 0; i < numbers.length; i++) {
            total += numbers[i];
        }

        // iN RA TỔNG 3 SỐ LẺ ĐẦU TIÊN CỦA MẢNG
        let numbers = [7, 1, 7, 9, 4, 5];
        let total = 0;
        let count = 0;
        for (let i = 0; i < numbers.length; i++) {
            if (numbers[i] % 2 == 1) {
                total += numbers[i];
                count++;
            }
            if (count == 3) {
                break;
            }
        }
        console.log(total);


        // let b = 5;
        // let bienmang = doituongmang;
        let numbers = [7, 1, 7];
        numbers.push(10, 11);           // thêm 1 hoặc nhiều phần tử cuối mảng
        console.log(numbers.pop()); // Xóa và trả về phần tử cuối cùng
        console.log(numbers); // [7,1,7,10]

        let numbers = [7, 1, 7];
        console.log(numbers.shift());       // xóa và trả về ptu đầu tiên của mảng
        console.log(numbers);

        numbers.unshift(10, 11);            // thêm 1 hoặc nhiều phần tử đầu mảng


        let a = [2, 3];
        let b = [6, 7];
        console.log(a.concat(b));       // nối 2 mảng

        let numbers = [7, 1, 7];

        console.log(numbers.join("anhyeuem"));      // nối các phần tử của mảng theo kí tự muốn nối
        */

      let numnbers = "3xxx5xxx7xxx9";
      let items = numnbers.split("xxx"); // ["3", "5", "7", "9"]  // tách ra theo kí tự phân cách và trả về 1 mảng
      let total = 0;
      for (let i = 0; i < items.length; i++) {
        // total += items[i];
        total = total + parseInt(items[i]);
      }
      console.log(total); // HOÀNG:03579 THÁI24
