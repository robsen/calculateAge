# run:  python -tt age.py

from datetime import date
from datetime import timedelta


def main():
	print("Age Calculation")
	print("===============\n")

	birthday = input("Birthday: ")
	day, month, year = \
		birthday.split('.')
	dateOfBirth = \
		date(
			int(year),
			int(month),
			int(day))
	today = date.today()
	
	ageInDays = (today - dateOfBirth).days
	ageInYears = int(ageInDays / 365)
	print("Age =", ageInYears, "years")


# run this module only directly
if (__name__ == "__main__"):
	main()
