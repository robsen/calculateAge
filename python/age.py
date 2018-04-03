# run:  python -tt age.py

from datetime import date


def main():
    print("Imprecise Age Calculation")
    print("=========================\n")

    birthYear = int(input("Year of birth:"))
    today = date.today()

    age = today.year - birthYear
    print("Age +/-1 =", age, "years")


# run this module only directly
if (__name__ == "__main__"):
    main()
