#include<iostream.h>
#include<conio.h>
#include<stdlib.h>
class shop
{
	int code[5],price[5],c,ch;
public:
	count()
	{
		c=0;
	}
	menu()
	{
		clrscr();
		cout<<"1.Input\n2.Display\n3.Delete\n4.Exit\nEnter Choice: ";
		cin>>ch;
		switch(ch)
		{
			case 1:in();
				   getch();
				   menu();
			case 2:disp();
				   getch();
				   menu();
			case 3:del();
				   getch();
				   menu();
			case 4:exit(0);
			default:cout<<"Invalid Choice!\n";
					getch();
					menu();
		}
	}
	in()
	{
		cout<<"Enter item code: ";
		cin>>code[c];
		cout<<"Enter item price: ";
		cin>>price[c];
		c++;
	}
	del()
	{
		int k;
		cout<<"Enter code to be deleted: ";
		cin>>k;
		for(int i=0;i<c;i++)
		{
			if(code[i]==k)
			{
				for(int j=i;j<c;j++)
					code[j]=code[j+1];
				c--;
				break;
			}
		}
	}
	disp()
	{
		cout<<"\nItem Code\t\tItem Price\n";
		cout<<"-----------------------------\n";
		for(int i=0;i<c;i++)
			cout<<code[i]<<"\t\t\t"<<price[i]<<endl;
	}
};
void main()
{
	shop s;
	s.count();
	s.menu();
}