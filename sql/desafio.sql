SELECT alunos.id, alunos.nome, AVG(notas.nota) media FROM alunos
LEFT JOIN notas ON alunos.id = notas.aluno_id GROUP BY notas.aluno_id ORDER BY media DESC;