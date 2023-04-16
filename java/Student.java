package 后端;

public class Student {
    private int sno;
    private String name;
    private String gender;
    private int age;
    private int javaScore;

    public int getSno() {
        return sno;
    }

    public void setSno(int sno) {
        this.sno = sno;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getGender() {
        return gender;
    }

    public void setGender(String gender) {
        if (gender != "男" && gender != "女") {
            System.out.println("输入数据错误，请输入‘男’或者‘女’!");
        } else {
            this.gender = gender;
        }
    }

    public int getAge() {
        return age;
    }

    public void setAge(int age) {
        this.age = age;
    }

    public int getJavaScore() {
        return javaScore;
    }

    public void setJavaScore(int javaScore) {
        this.javaScore = javaScore;
    }

    public Student(int sno, String name, String gender, int age, int javaScore) {
        this.sno = sno;
        this.name = name;
        this.gender = gender;
        this.age = age;
        this.javaScore = javaScore;
    }

    public void xue() {
        System.out.println("学号是:" + sno + "姓名是:" + name + "性别是:" + gender + "年龄是:" + age + "java成绩为:" + javaScore);
    }

    public static void main(String[] args) {
        Student s1 = new Student(123, "韩枫", "男", 19, 99);
        s1.xue();
        System.out.println("\n");
        Student s2 = new Student(123, "顾楠", "女", 2000, 100);
        s2.xue();
        System.out.println("\n");
        Student s3 = new Student(123, "老二", "女", 99, 10);
        s3.xue();
        System.out.println("\n");
        Student s4 = new Student(123, "张晓伞", "男", 19, 29);
        s4.xue();
        System.out.println("\n");
        Student s5 = new Student(123, "萧炎", "男", 13, 98);
        s5.xue();
        System.out.println("\n");
        int ss[] = { 99, 100, 10, 29, 98 };

        int m1 = Max(ss);
        int m2 = Min(ss);
        int A1 = Avg(ss);
        System.out.println("最大值是:" + m1);
        System.out.println("最小值是:" + m2);
        System.out.println("平均值是:" + A1);
    }

    public static int Max(int ss[]) {
        int max = ss[0];
        for (int i = 1; i < ss.length; i++) {
            if (ss[i] > max) {
                max = ss[i];
            }
        }
        return max;
    }

    public static int Min(int ss[]) {
        int min = ss[0];
        for (int i = 1; i < ss.length; i++) {
            if (ss[i] < min) {
                min = ss[i];
            }
        }
        return min;
    }

    public static int Avg(int ss[]) {
        int sum = 0, avg = 0;
        for (int i = 1; i < ss.length; i++) {
            sum += ss[i];
        }
        avg = sum / ss.length;
        return avg;
    }
}
