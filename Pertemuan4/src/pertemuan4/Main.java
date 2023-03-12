
package pertemuan4;

import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner keyboard = new Scanner(System.in);

        System.out.println("=============Program Kalkulator Sederhana=============");
        System.out.println("Ketikkan Angka, Beserta Operatornya");
        System.out.println("Pisahkan angka dengan Operator Matematika memakai spasi");
        System.out.println("Contoh Input -> 1 + 2 * 3 / 4 - 5 ");
        System.out.print("Masukkan Input : ");
        String my_input = keyboard.nextLine();

        
        Calc Calculator = new Calc(my_input);
        System.out.println("Hasil = "+ Calculator.calculateResult());
        keyboard.close();
    }
    
}
