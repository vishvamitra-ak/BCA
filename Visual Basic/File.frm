VERSION 5.00
Begin VB.Form Form14 
   Caption         =   "Form1"
   ClientHeight    =   4065
   ClientLeft      =   60
   ClientTop       =   450
   ClientWidth     =   6000
   LinkTopic       =   "Form1"
   ScaleHeight     =   4065
   ScaleWidth      =   6000
   StartUpPosition =   3  'Windows Default
   Begin VB.CommandButton Command4 
      Caption         =   "EXIT"
      Height          =   495
      Left            =   3720
      TabIndex        =   7
      Top             =   2880
      Width           =   1215
   End
   Begin VB.CommandButton Command3 
      Caption         =   "CLEAR"
      Height          =   495
      Left            =   840
      TabIndex        =   6
      Top             =   2880
      Width           =   1215
   End
   Begin VB.TextBox Text2 
      Height          =   495
      Left            =   3480
      TabIndex        =   5
      Top             =   1200
      Width           =   1815
   End
   Begin VB.TextBox Text1 
      Height          =   495
      Left            =   600
      TabIndex        =   4
      Top             =   1200
      Width           =   1815
   End
   Begin VB.CommandButton Command2 
      Caption         =   "READ"
      Height          =   495
      Left            =   3720
      TabIndex        =   3
      Top             =   2040
      Width           =   1215
   End
   Begin VB.CommandButton Command1 
      Caption         =   "WRITE"
      Height          =   495
      Left            =   840
      TabIndex        =   2
      Top             =   2040
      Width           =   1215
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      Caption         =   "OUTPUT"
      Height          =   255
      Left            =   3720
      TabIndex        =   1
      Top             =   480
      Width           =   1215
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      Caption         =   "INPUT"
      Height          =   255
      Left            =   960
      TabIndex        =   0
      Top             =   480
      Width           =   1215
   End
End
Attribute VB_Name = "Form14"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Private Sub Command1_Click()
File = FreeFile
Open "C:\abc.txt" For Output As File
Print #File, Text1.Text
Close File
End Sub

Private Sub Command2_Click()
File = FreeFile
Open "C:\abc.txt" For Input As File
Text2 = Input(LOF(File) - 2, File)
Close File
End Sub

Private Sub Command3_Click()
Text1.Text = ""
Text2.Text = ""
Text1.SetFocus
End Sub

Private Sub Command4_Click()
End
End Sub
