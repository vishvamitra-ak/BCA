#include<iostream.h>
#include<conio.h>
#include<stdlib.h>
void main()
{
	int score,income;
	float sports;
	clrscr();

	cout<<"Enter Score,sports points,income\n";
	cin>>score>>sports>>income;

	if(score>490)
	{
		cout<<"Eligible for post A\n";
		if(sports>4.0)
		{
			cout<<"Eligible for post B\n";
			if(income<10000)
			{
				cout<<"Eligible for post C\n";
				//getch();
				//exit(0);
			}
			//cout<<"Eligible for post B\n";
			//getch();
			//exit(0);
		}
		//cout<<"Eligible for post A\n";
		//getch();
		//exit(0);
	}
	else
		cout<<"Not Eligible for any post\n";
	getch();
}
