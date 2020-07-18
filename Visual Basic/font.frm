VERSION 5.00
Begin VB.Form Form2 
   Caption         =   "Form1"
   ClientHeight    =   4875
   ClientLeft      =   60
   ClientTop       =   450
   ClientWidth     =   9435
   LinkTopic       =   "Form1"
   ScaleHeight     =   4875
   ScaleWidth      =   9435
   StartUpPosition =   3  'Windows Default
   Begin VB.CommandButton cmdexit 
      Caption         =   "Exit"
      Height          =   495
      Left            =   3720
      TabIndex        =   7
      Top             =   3840
      Width           =   1215
   End
   Begin VB.ComboBox cmbsize 
      Height          =   315
      ItemData        =   "font.frx":0000
      Left            =   6720
      List            =   "font.frx":0010
      TabIndex        =   5
      Text            =   "Size"
      Top             =   840
      Width           =   1215
   End
   Begin VB.ComboBox cmbstyle 
      Height          =   315
      ItemData        =   "font.frx":0024
      Left            =   3600
      List            =   "font.frx":0034
      TabIndex        =   1
      Text            =   "Style"
      Top             =   840
      Width           =   1215
   End
   Begin VB.ComboBox cmbfont 
      Height          =   315
      ItemData        =   "font.frx":005C
      Left            =   240
      List            =   "font.frx":005E
      TabIndex        =   0
      Text            =   "Font"
      Top             =   840
      Width           =   1215
   End
   Begin VB.Label lblmsg 
      AutoSize        =   -1  'True
      Caption         =   "Welcome To Visual Basic"
      BeginProperty Font 
         Name            =   "MS Sans Serif"
         Size            =   18
         Charset         =   0
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   435
      Left            =   2400
      TabIndex        =   6
      Top             =   2400
      Width           =   4110
   End
   Begin VB.Label Label3 
      Alignment       =   2  'Center
      Caption         =   "Size"
      Height          =   495
      Left            =   6720
      TabIndex        =   4
      Top             =   120
      Width           =   1215
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      Caption         =   "Font Style"
      Height          =   495
      Left            =   3600
      TabIndex        =   3
      Top             =   120
      Width           =   1215
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      Caption         =   "Font"
      Height          =   495
      Left            =   240
      TabIndex        =   2
      Top             =   120
      Width           =   1215
   End
End
Attribute VB_Name = "Form2"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Private Sub cmbfont_Click()
    lblmsg.FontName = cmbfont.Text
End Sub

Private Sub cmbsize_Click()
    lblmsg.FontSize = cmbsize.Text
End Sub

Private Sub cmbstyle_Click()
    If cmbstyle.Text = "REGULAR" Then
        lblmsg.FontBold = False
        lblmsg.FontItalic = False
    ElseIf cmbstyle.Text = "BOLD" Then
        lblmsg.FontBold = True
        lblmsg.FontItalic = False
    ElseIf cmbstyle.Text = "ITALIC" Then
        lblmsg.FontBold = False
        lblmsg.FontItalic = True
    ElseIf cmbstyle.Text = "BOLD-ITALIC" Then
        lblmsg.FontBold = True
        lblmsg.FontItalic = True
    End If
End Sub

Private Sub cmdexit_Click()
    End
End Sub

Private Sub Form_Load()
    For i = 0 To Screen.FontCount - 1
        cmbfont.AddItem (Screen.Fonts(i))
    Next i
    lblmsg.Font = "MS ON SERIF"
End Sub
