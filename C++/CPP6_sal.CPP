#include<iostream.h>
#include<conio.h>
void main()
{
	int basic[5],sales[5];
	float sal[5];
	clrscr();
	for(int i=0;i<5;i++)
	{
		cout<<"Enter Basic Salary for employee "<<i+1<<endl;
		cin>>basic[i];
	}
	for(i=0;i<5;i++)
	{
		cout<<"\nEnter Sales: ";
		cin>>sales[i];
	}
	for(i=0;i<5;i++)
	{
		if(sales[i]<15000)
			sal[i]=basic[i]+(basic[i]*(5/100.0));
		else
			sal[i]=basic[i]+(basic[i]*(10/100.0));
	}
	for(i=0;i<5;i++)
		cout<<"\nTotal Salary for employee "<<i+1<<" = "<<sal[i]<<endl;
	getch();
}