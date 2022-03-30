﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace prjJogoForca
{
    class Forca
    {
        private List<string> Palavras;
        public int Pos { get; set; }
        public Forca(List<string> Palavras) 
        {
            this.Palavras = Palavras;
            this.Pos = 0;
        }
        public void Sortear()
        {
            Random sorteio = new Random();
            Pos = sorteio.Next(Palavras.Count());
        }
        public string DevolvePalavra()
        {
            return Palavras[Pos];
        }

    }
}
