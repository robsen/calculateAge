/*
    Author:     Robert Jaskowski

    compilation:    gcc main.c -o age.exe 
    run on cmd:     age.exe
*/

#include <stdio.h>
#include <time.h>

int main (void)
{
    // heading
    printf("Calculate age in C\n");
    for (int i = 0; i < 18; i++) // 18 = length of heading above
        printf("-");

    // get birthyear
    printf("\n\nYear of birth:\n");
    printf(" > ");
    int birthyear;
    scanf("%d", &birthyear);
    
    // get todays date
    time_t timeNow;
    time(&timeNow); // set current time
    struct tm* today = localtime(&timeNow);

    // calculate unprecise age
    int age = today->tm_year + 1900 - birthyear; // tm_year is counting from 1900 -> tm_year = 2 --> 1902
    printf("Age +/- 1 = %d years", age);

    return 0;
}
