package 后端;

import java.util.Random;

public class sy05Random随机数 {
    public static void main(String[] args) {
        Random r = new Random();
        int number = r.nextInt(10);
        System.out.println(number);
    }
}
