VERSION 5.00
Begin VB.Form Form1 
   Caption         =   "Login"
   ClientHeight    =   2610
   ClientLeft      =   8475
   ClientTop       =   4365
   ClientWidth     =   2760
   LinkTopic       =   "Form1"
   ScaleHeight     =   2610
   ScaleWidth      =   2760
   Begin VB.CommandButton btn_exit 
      Caption         =   "Exit"
      Height          =   495
      Left            =   720
      TabIndex        =   6
      Top             =   2040
      Width           =   1215
   End
   Begin VB.CommandButton btn_reset 
      Caption         =   "Reset"
      Height          =   495
      Left            =   1440
      TabIndex        =   5
      Top             =   1440
      Width           =   1215
   End
   Begin VB.CommandButton btn_login 
      Caption         =   "Login"
      Height          =   495
      Left            =   120
      TabIndex        =   4
      Top             =   1440
      Width           =   1215
   End
   Begin VB.TextBox txt_pass 
      Height          =   285
      IMEMode         =   3  'DISABLE
      Left            =   1440
      PasswordChar    =   "*"
      TabIndex        =   3
      Top             =   840
      Width           =   1215
   End
   Begin VB.TextBox txt_user 
      Height          =   285
      Left            =   1440
      TabIndex        =   2
      Top             =   240
      Width           =   1215
   End
   Begin VB.Label lbl_pass 
      AutoSize        =   -1  'True
      Caption         =   "PASSWORD"
      Height          =   195
      Left            =   240
      TabIndex        =   1
      Top             =   840
      Width           =   945
   End
   Begin VB.Label lbl_user 
      Alignment       =   2  'Center
      AutoSize        =   -1  'True
      Caption         =   "USERNAME"
      Height          =   195
      Left            =   240
      TabIndex        =   0
      Top             =   240
      Width           =   945
   End
End
Attribute VB_Name = "Form1"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Private Sub btn_exit_Click()
    End
End Sub

Private Sub btn_login_Click()
    If (txt_user.Text) = "CSI" Then
        If (txt_pass.Text) = "BCA" Then
            MsgBox "Logged In!"
        Else
            MsgBox "Invalid Password!"
            txt_pass.Text = ""
            txt_pass.SetFocus
        End If
    Else
        MsgBox "Invalid Username!"
        txt_user.Text = ""
        txt_pass.Text = ""
        txt_user.SetFocus
    End If
End Sub

Private Sub btn_reset_Click()
    txt_user.Text = ""
    txt_pass.Text = ""
End Sub
