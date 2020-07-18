VERSION 5.00
Begin VB.Form Form10 
   Caption         =   "Form1"
   ClientHeight    =   2400
   ClientLeft      =   7035
   ClientTop       =   3870
   ClientWidth     =   3750
   LinkTopic       =   "Form1"
   ScaleHeight     =   2400
   ScaleWidth      =   3750
   Begin VB.CommandButton Command4 
      Caption         =   "Exit"
      Height          =   495
      Left            =   2280
      TabIndex        =   5
      Top             =   1680
      Width           =   1215
   End
   Begin VB.CommandButton Command3 
      Caption         =   "Reset"
      Height          =   495
      Left            =   120
      TabIndex        =   4
      Top             =   1680
      Width           =   1215
   End
   Begin VB.CommandButton Command2 
      Caption         =   "Decrypt"
      Height          =   495
      Left            =   2280
      TabIndex        =   3
      Top             =   960
      Width           =   1215
   End
   Begin VB.CommandButton Command1 
      Caption         =   "Encrypt"
      Height          =   495
      Left            =   120
      TabIndex        =   2
      Top             =   960
      Width           =   1215
   End
   Begin VB.TextBox Text2 
      Height          =   495
      Left            =   2280
      TabIndex        =   1
      Top             =   120
      Width           =   1215
   End
   Begin VB.TextBox Text1 
      Height          =   495
      Left            =   120
      TabIndex        =   0
      Top             =   120
      Width           =   1215
   End
End
Attribute VB_Name = "Form10"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Dim i As Integer
Dim ch As String
Private Sub Command1_Click()
For i = 1 To Len(Text1.Text)
ch = Mid(Text1.Text, i, 1)
Text2.Text = Text2.Text & Chr(Asc(ch) + 12)
Next i
Text1.Text = ""
End Sub

Private Sub Command2_Click()
For i = 1 To Len(Text2.Text)
ch = Mid(Text2.Text, i, 1)
Text1.Text = Text1.Text & Chr(Asc(ch) - 12)
Next i
Text2.Text = ""
End Sub

Private Sub Command3_Click()
Text1.Text = ""
Text2.Text = ""
Text1.SetFocus
End Sub

Private Sub Command4_Click()
End
End Sub
