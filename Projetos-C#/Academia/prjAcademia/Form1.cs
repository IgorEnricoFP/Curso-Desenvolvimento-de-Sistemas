﻿using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace prjAcademia
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void bindingNavigatorDeleteItem_Click(object sender, EventArgs e)
        {

        }

        Academia BoaForma;

        private void Form1_Load(object sender, EventArgs e)
        {
            BoaForma = new Academia(new BindingList<Aluno>());
            BoaForma.Matricular(new Aluno(1, "JOAO", 20, 67, 1.73));
            BoaForma.Matricular(new Aluno(2, "MARIA", 22, 97, 1.80));
            BoaForma.Matricular(new Aluno(3, "JOSE", 28, 78, 1.56));
            BoaForma.Matricular(new Aluno(4, "ANA", 25, 80, 1.82));
            bs.DataSource = BoaForma.Alunos;
            dgvAlunos.DataSource = bs;
            dgvAlunos.AutoResizeColumns();

        }
    }
}
