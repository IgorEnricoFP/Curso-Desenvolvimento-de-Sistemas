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
            ServidorSQL Servidor = new ServidorSQL();
            if (Servidor.CriarBanco() == true)
            {
                MessageBox.Show("Banco de dados gerado com sucesso!");
            }
            BoaForma = new Academia(new BindingList<Aluno>());
            BoaForma.Preencher();
            bs.DataSource = BoaForma.Alunos;
            dgvAlunos.DataSource = bs;
            dgvAlunos.AutoResizeColumns();

        }

        private void btnMatricular_Click(object sender, EventArgs e)
        {
            FormFichaAluno ficha = new FormFichaAluno();
            ficha.Registro = null;
            ficha.ShowDialog();
            if (ficha.Registro != null)
            {
                BoaForma.Matricular(ficha.Registro);
                bs.MoveLast();
                bs.ResetBindings(false);
            }
        }

        private void btnEditar_Click(object sender, EventArgs e)
        {
            FormFichaAluno ficha = new FormFichaAluno();
            ficha.Registro = (Aluno)bs.Current;
            ficha.ShowDialog();
            if (ficha.Registro != null)
            {
                BoaForma.Editar(ficha.Registro);
                bs.ResetBindings(false);
                dgvAlunos.AutoResizeColumns();
            }
        }

        private void btnExcluir_Click(object sender, EventArgs e)
        {
            Aluno atual = (Aluno)bs.Current;
            DialogResult op;
            op = MessageBox.Show("Deseja Excluir: " + atual.Nome, "ALERTA", MessageBoxButtons.YesNo, MessageBoxIcon.Question);
            if (op == DialogResult.Yes)
            {
                BoaForma.Excluir(atual);
                bs.ResetBindings(false);
                dgvAlunos.AutoResizeColumns();
            }
        }
    }
}
