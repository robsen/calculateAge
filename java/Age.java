/*
    Author:     Robert Jaskowski

    compilation:    javac Age.java
    run on cmd:     java Age
*/

import java.util.Scanner;
import java.util.Date;

public class Age {

    public static void main(String[] args) {
        // heading
        String heading = "Calculate age in Java";
        System.out.println(heading);
        for (int i = 0; i < heading.length(); i++)
            System.out.print("-");

        // get year of birth
        System.out.println("\n\nYear of birth:");
        Scanner scanner = new Scanner(System.in); // scanner for console input
        System.out.print(" > ");
        int birthyear = scanner.nextInt(); // take only integers as input

        // calculate imprecise age
        int currentYear = java.time.Year.now().getValue();
        int age = currentYear - birthyear;

        System.out.print("Age +/-1 = ");
        System.out.println(age);
    }

}
