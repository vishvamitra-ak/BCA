#include<iostream.h>
#include<conio.h>
void main()
{
	int n,se=0,so=0;
	clrscr();

	cout<<"Enter n\n";
	cin>>n;

	for(int i=1;i<=n;i++)
	{
		if(i%2)
			so+=i;
		else
			se+=i;
	}
	cout<<"Even Sum= "<<se<<" Odd Sum= "<<so<<endl;
	getch();
}
