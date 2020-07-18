VERSION 5.00
Begin VB.MDIForm Form11 
   BackColor       =   &H8000000C&
   Caption         =   "MDIForm1"
   ClientHeight    =   3090
   ClientLeft      =   165
   ClientTop       =   855
   ClientWidth     =   4680
   LinkTopic       =   "MDIForm1"
   StartUpPosition =   3  'Windows Default
   Begin VB.Menu fil 
      Caption         =   "FILE"
      Begin VB.Menu mnnw 
         Caption         =   "New"
      End
      Begin VB.Menu mnarr 
         Caption         =   "Arrange"
      End
      Begin VB.Menu mncasc 
         Caption         =   "Cascade"
      End
      Begin VB.Menu mnhrz 
         Caption         =   "Horizontal"
      End
      Begin VB.Menu mnvert 
         Caption         =   "Vertical"
      End
      Begin VB.Menu mnext 
         Caption         =   "Exit"
      End
   End
End
Attribute VB_Name = "Form11"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Dim forms
Private Sub mnarr_Click()
MDIForm11_2.Arrange vbarrangeicon
End Sub
Private Sub mncasc_Click()
MDIForm11_2.Arrange vbCascade
End Sub

Private Sub mnext_Click()
End
End Sub

Private Sub mnhrz_Click()
MDIForm11_2.Arrange vbTileHorizontal
End Sub

Private Sub mnnw_Click()
Dim nemforms As Form11_2
Set newforms = New Form11_2
forms = forms + 1
newforms.Caption = "child form " + Str(forms)
newforms.Show
End Sub

Private Sub mnvert_Click()
MDIForm11_2.Arrange vbTileVertical
End Sub
