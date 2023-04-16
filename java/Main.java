package 后端;

import java.util.Arrays;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int n = in.nextInt();
        int[] m = new int[n];
        for (int i = 0; i < m.length; i++) {
            m[i] = in.nextInt();
        }
        for (int i = 0; i < m.length - 1; i++) {
            if (m[i] > m[i + 1]) {
                int temp = m[i];
                m[i] = m[i + 1];
                m[i + 1] = temp;
            }
        }
        for (int i = 0; i < m.length; i++) {
            System.out.print(m[i] + " ");
        }
    }
}
