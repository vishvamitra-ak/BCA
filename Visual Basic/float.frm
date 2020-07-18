VERSION 5.00
Begin VB.Form Form15 
   Caption         =   "Form1"
   ClientHeight    =   3660
   ClientLeft      =   60
   ClientTop       =   450
   ClientWidth     =   7830
   LinkTopic       =   "Form1"
   ScaleHeight     =   3660
   ScaleWidth      =   7830
   StartUpPosition =   3  'Windows Default
   Begin VB.CommandButton Command2 
      Caption         =   "Exit"
      Height          =   495
      Left            =   2040
      TabIndex        =   3
      Top             =   1200
      Width           =   1215
   End
   Begin VB.CommandButton Command1 
      Caption         =   "Click"
      Height          =   495
      Left            =   240
      TabIndex        =   2
      Top             =   1200
      Width           =   1215
   End
   Begin VB.TextBox Text1 
      Height          =   375
      Left            =   1920
      TabIndex        =   1
      Top             =   240
      Width           =   1455
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      AutoSize        =   -1  'True
      Caption         =   "Enter Any Number"
      Height          =   195
      Left            =   240
      TabIndex        =   0
      Top             =   360
      Width           =   1305
   End
End
Attribute VB_Name = "Form15"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Private Sub Command1_Click()
X = Val(Text1.Text)
If (X = Int(X)) Then
m = MsgBox("Invalid Input", vbRetryCancel, "input not accepted")
If (m = vbRetry) Then
Text1.Text = ""
Text1.SetFocus
End If
Else
m = MsgBox("Valid Entery", vbOKOnly, "input accepted")
End If
End Sub

Private Sub Command2_Click()
End
End Sub
