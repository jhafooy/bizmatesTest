/*No. 2 */
SELECT LPAD(trn_teacher.id, 11, 0) as id,trn_teacher.nickname,
CASE
    WHEN trn_teacher.status = 0 THEN 'Discontinued'
    WHEN trn_teacher.status = 1 THEN 'Active'
    WHEN trn_teacher.status = 2 THEN 'Deactivated'
END AS status,
CASE
	WHEN trn_teacher_role.role = 1 THEN 'Trainer'
    WHEN trn_teacher_role.role = 2 THEN 'Assessor'
    WHEN trn_teacher_role.role = 2 THEN 'Staff'
END AS role
FROM trn_teacher
INNER JOIN trn_teacher_role ON trn_teacher.id=trn_teacher_role.teacher_id

/*No. 2 */
SELECT trn_teacher.nickname,trn_time_table.status,
CASE
WHEN trn_time_table.status = 1 THEN trn_time_table.status
else 0
END as Open,
CASE
WHEN trn_time_table.status = 2 THEN trn_time_table.status
else 0
END as Reserve ,
CASE
WHEN trn_evaluation.result = 1 THEN trn_evaluation.result
else 0
END as Taught,
CASE
WHEN trn_evaluation.result = 2 THEN trn_evaluation.result
else 0
END as NoShow
FROM trn_teacher
INNER JOIN trn_teacher_role ON trn_teacher.id=trn_teacher_role.teacher_id

INNER JOIN trn_time_table ON trn_teacher.id=trn_time_table.teacher_id
where trn_teacher.status = 1 or trn_teacher.status = 2 
AND trn_teacher_role.role = 1 or trn_teacher_role.role = 2;
