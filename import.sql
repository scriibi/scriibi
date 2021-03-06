insert into curriculum(country, state, description) values('Australia','VIC','VIC English Curriculum');
insert into curriculum(country, state, description) values('Australia','QLD','Queensland English Curriculum');
insert into curriculum(country, state, description) values('Australia', 'NSW', 'NSW State Language Curriculum');
insert into school_type_identifiers(school_type_identifier_name, school_type_identifier_description) values('Primary School', 'Australian Primary School - Level 0 to 6');
insert into school_type_identifiers(school_type_identifier_name, school_type_identifier_description) values('Secondary School', 'Australian Secondary School - Level 7 to 10');
insert into school_types(fk_curriculum_id, fk_school_type_identifier_id) values(1, 1);
insert into school_types(fk_curriculum_id, fk_school_type_identifier_id) values(1, 2);
insert into school_types(fk_curriculum_id, fk_school_type_identifier_id) values(2, 1);
insert into school_types(fk_curriculum_id, fk_school_type_identifier_id) values(2, 2);
insert into school_types(fk_curriculum_id, fk_school_type_identifier_id) values(3, 1);
insert into school_types(fk_curriculum_id, fk_school_type_identifier_id) values(3, 2);
insert into schools(name, curriculum_details_curriculum_details_Id, school_type_identifier_id) values('Hawthorn Primary', 1, 1);
insert into schools(name, curriculum_details_curriculum_details_Id, school_type_identifier_id) values('Mount Elwood Primary', 1, 1);
insert into schools(name, curriculum_details_curriculum_details_Id, school_type_identifier_id) values('River Primary', 2, 1);
insert into schools(name, curriculum_details_curriculum_details_Id, school_type_identifier_id) values('Armadale Primary', 1, 1);
insert into schools(name, curriculum_details_curriculum_details_Id, school_type_identifier_id) values('Cowes Primary', 1, 1);
insert into schools(name, curriculum_details_curriculum_details_Id, school_type_identifier_id) values('Nerang Primary School', 2, 1);
insert into schools(name, curriculum_details_curriculum_details_Id, school_type_identifier_id) values('Nichols Primary School', 1, 1);
insert into schools(name, curriculum_details_curriculum_details_Id, school_type_identifier_id) values('Swan Hill Primary School', 1, 1);
insert into schools(name, curriculum_details_curriculum_details_Id, school_type_identifier_id) values('Beumauris North Primary School', 1, 1);
insert into schools(name, curriculum_details_curriculum_details_Id, school_type_identifier_id) values('Carnegie Primary School', 1, 1);
insert into schools(name, curriculum_details_curriculum_details_Id, school_type_identifier_id) values('Caulfield South Primary School', 1, 1);
insert into schools(name, curriculum_details_curriculum_details_Id, school_type_identifier_id) values('Irymple Primary School', 1, 1);
insert into scriibi_levels(scriibi_Level) values (	-5.00	);
insert into scriibi_levels(scriibi_Level) values (	-4.75	);
insert into scriibi_levels(scriibi_Level) values (	-4.50	);
insert into scriibi_levels(scriibi_Level) values (	-4.25	);
insert into scriibi_levels(scriibi_Level) values (	-4.00	);
insert into scriibi_levels(scriibi_Level) values (	-3.75	);
insert into scriibi_levels(scriibi_Level) values (	-3.50	);
insert into scriibi_levels(scriibi_Level) values (	-3.25	);
insert into scriibi_levels(scriibi_Level) values (	-3.00	);
insert into scriibi_levels(scriibi_Level) values (	-2.75	);
insert into scriibi_levels(scriibi_Level) values (	-2.50	);
insert into scriibi_levels(scriibi_Level) values (	-2.25	);
insert into scriibi_levels(scriibi_Level) values (	-2.00	);
insert into scriibi_levels(scriibi_Level) values (	-1.75	);
insert into scriibi_levels(scriibi_Level) values (	-1.50	);
insert into scriibi_levels(scriibi_Level) values (	-1.25	);
insert into scriibi_levels(scriibi_Level) values (	-1.00	);
insert into scriibi_levels(scriibi_Level) values (	-0.75	);
insert into scriibi_levels(scriibi_Level) values (	-0.50	);
insert into scriibi_levels(scriibi_Level) values (	-0.25	);
insert into scriibi_levels(scriibi_Level) values (	0.00	);
insert into scriibi_levels(scriibi_Level) values (	0.25	);
insert into scriibi_levels(scriibi_Level) values (	0.50	);
insert into scriibi_levels(scriibi_Level) values (	0.75	);
insert into scriibi_levels(scriibi_Level) values (	1.00	);
insert into scriibi_levels(scriibi_Level) values (	1.25	);
insert into scriibi_levels(scriibi_Level) values (	1.50	);
insert into scriibi_levels(scriibi_Level) values (	1.75	);
insert into scriibi_levels(scriibi_Level) values (	2.00	);
insert into scriibi_levels(scriibi_Level) values (	2.25	);
insert into scriibi_levels(scriibi_Level) values (	2.50	);
insert into scriibi_levels(scriibi_Level) values (	2.75	);
insert into scriibi_levels(scriibi_Level) values (	3.00	);
insert into scriibi_levels(scriibi_Level) values (	3.25	);
insert into scriibi_levels(scriibi_Level) values (	3.50	);
insert into scriibi_levels(scriibi_Level) values (	3.75	);
insert into scriibi_levels(scriibi_Level) values (	4.00	);
insert into scriibi_levels(scriibi_Level) values (	4.25	);
insert into scriibi_levels(scriibi_Level) values (	4.50	);
insert into scriibi_levels(scriibi_Level) values (	4.75	);
insert into scriibi_levels(scriibi_Level) values (	5.00	);
insert into scriibi_levels(scriibi_Level) values (	5.25	);
insert into scriibi_levels(scriibi_Level) values (	5.50	);
insert into scriibi_levels(scriibi_Level) values (	5.75	);
insert into scriibi_levels(scriibi_Level) values (	6.00	);
insert into scriibi_levels(scriibi_Level) values (	6.25	);
insert into scriibi_levels(scriibi_Level) values (	6.50	);
insert into scriibi_levels(scriibi_Level) values (	6.75	);
insert into scriibi_levels(scriibi_Level) values (	7.00	);
insert into scriibi_levels(scriibi_Level) values (	7.25	);
insert into scriibi_levels(scriibi_Level) values (	7.50	);
insert into scriibi_levels(scriibi_Level) values (	7.75	);
insert into scriibi_levels(scriibi_Level) values (	8.00	);
insert into scriibi_levels(scriibi_Level) values (	8.25	);
insert into scriibi_levels(scriibi_Level) values (	8.50	);
insert into scriibi_levels(scriibi_Level) values (	8.75	);
insert into scriibi_levels(scriibi_Level) values (	9.00	);
insert into scriibi_levels(scriibi_Level) values (	9.25	);
insert into scriibi_levels(scriibi_Level) values (	9.50	);
insert into scriibi_levels(scriibi_Level) values (	9.75	);
insert into scriibi_levels(scriibi_Level) values (	10.00	);
insert into scriibi_levels(scriibi_Level) values (	10.25	);
insert into scriibi_levels(scriibi_Level) values (	10.50	);
insert into scriibi_levels(scriibi_Level) values (	10.75	);
insert into scriibi_levels(scriibi_Level) values (	11.00	);
insert into scriibi_levels(scriibi_Level) values (	11.25	);
insert into scriibi_levels(scriibi_Level) values (	11.50	);
insert into scriibi_levels(scriibi_Level) values (	11.75	);
insert into scriibi_levels(scriibi_Level) values (	12.00	);
insert into scriibi_levels(scriibi_Level) values (	12.25	);
insert into scriibi_levels(scriibi_Level) values (	12.50	);
insert into scriibi_levels(scriibi_Level) values (	12.75	);
insert into scriibi_levels(scriibi_Level) values (	13.00	);
insert into scriibi_levels(scriibi_Level) values (	13.25	);
insert into scriibi_levels(scriibi_Level) values (	13.50	);
insert into scriibi_levels(scriibi_Level) values (	13.75	);
insert into scriibi_levels(scriibi_Level) values (	14.00	);
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (1,121,'Prep');
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (1,125,'Grade 1');
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (1,129,'Grade 2');
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (1,133,'Grade 3');
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (1,137,'Grade 4');
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (1,141,'Grade 5');
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (1,145,'Grade 6');
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (2,149,'Year 7');
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (2,153,'Year 8');
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (2,157,'Year 9');
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (2,161,'Year 10');
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (3,121,'Prep');
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (3,125,'Grade 1');
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (3,129,'Grade 2');
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (3,133,'Grade 3');
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (3,137,'Grade 4');
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (3,141,'Grade 5');
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (3,145,'Grade 6');
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (4,149,'Year 7');
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (4,153,'Year 8');
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (4,157,'Year 9');
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (4,161,'Year 10');
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (5,121,'Kindergarten');
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (5,125,'Year 1');
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (5,129,'Year 2');
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (5,133,'Year 3');
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (5,137,'Year 4');
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (5,141,'Year 5');
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (5,145,'Year 6');
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (6,149,'Year 7');
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (6,153,'Year 8');
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (6,157,'Year 9');
INSERT INTO grade_labels(fk_school_type_id,fk_scriibi_level_id,grade_label) VALUES (6,161,'Year 10');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (1,121,'Foundation');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (1,125,'Level 1');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (1,129,'Level 2');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (1,133,'Level 3');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (1,137,'Level 4');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (1,141,'Level 5');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (1,145,'Level 6');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (2,149,'Level 7');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (2,153,'Level 8');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (2,157,'Level 9');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (2,161,'Level 10');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (3,121,'Prep');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (3,125,'Year 1');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (3,129,'Year 2');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (3,133,'Year 3');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (3,137,'Year 4');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (3,141,'Year 5');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (3,145,'Year 6');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (4,149,'Year 7');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (4,153,'Year 8');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (4,157,'Year 9');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (4,161,'Year 10');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (5,121,'Early Stage 1');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (5,125,'Stage 1.1');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (5,129,'Stage 1.2');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (5,133,'Stage 2.1');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (5,137,'Stage 2.2');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (5,141,'Stage 3.1');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (5,145,'Stage 3.2');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (6,149,'Stage 4.1');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (6,153,'Stage 4.2');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (6,157,'Stage 5.1');
INSERT INTO assessed_level_labels(school_type_id_fk,school_scriibi_level_id,assessed_level_label) VALUES (6,161,'Stage 5.2');
INSERT INTO teaching_periods(period_Name) VALUES ('Term 1');
INSERT INTO teaching_periods(period_Name) VALUES ('Term 2');
INSERT INTO teaching_periods(period_Name) VALUES ('Term 3');
INSERT INTO teaching_periods(period_Name) VALUES ('Term 4');
INSERT INTO teaching_periods(period_Name) VALUES ('Semester 1');
INSERT INTO teaching_periods(period_Name) VALUES ('Semester 2');
insert into positions(position_Name) values ('Teacher');
insert into positions(position_Name) values ('Leader');
insert into positions(position_Name) values ('Curriculum Leader');
insert into positions(position_Name) values ('Vice Principal');
insert into positions(position_Name) values ('Principal');
insert into positions(position_Name) values ('Literacy Lead');
insert into positions(position_Name) values ('Grade Level Lead Teacher');
insert into traits(trait_Name, colour, icon) values ('Ideas', 'yellow', 'ideas.png');
insert into traits(trait_Name, colour, icon) values ('Organisation', 'red', 'organisation.png');
insert into traits(trait_Name, colour, icon) values ('Word Choice', 'green', 'wordChoice.png');
insert into traits(trait_Name, colour, icon) values ('Conventions', 'pink', 'conventions.png');
insert into traits(trait_Name, colour, icon) values ('Sentence Fluency', 'blue', 'sentencefluency.png');
insert into traits(trait_Name, colour, icon) values ('Voice', 'grey', 'voice.png');
insert into traits(trait_Name, colour, icon) values ('Other Skills', 'purple', 'otherSkills.png');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Opening / Introduction','Depending on the type of text, an opening or introduction gives the reader a clear indication of what will be discussed in the text, its purpose, and goals.  For creative writing, it''s an opportunity to hook the reader with a compelling and memorable beginning.');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Character Development','Character development refers to <strong>creating a character</strong> by working out their appearance, likes and dislikes and their relationship to other characters. It also refers to <strong>developing an existing character to make them more three- dimensional and memorable</strong> for readers. Writers do this by showing their character’s personality traits, feelings, thoughts, actions, mannerisms, as well as how they communicate (dialogue).');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Cohesion','Texts are made cohesive when they use devices like pronouns, conjunctions and connectives to link ideas and sentences.  This makes writing more coherent and aids meaning. &nbsp;');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Comparing Texts','Comparing and contrasting organisational structures and language features for different types of texts.');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Concepts about Print','Concepts about print refers to the awareness of print works.  For example, understanding that print conveys a message, and the direction of writing is left to right and top to bottom.');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Connectives','Are words that <strong>link or connect ideas within sentences and paragraphs</strong>. Examples include; then, also, afterwards, first, next. They connect ideas smoothly and enhance meaning for the reader.');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Creating Texts', 'The ability of a writer to plan, draft and publish different texts to suit the audience and purpose.');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Developing Ideas','Before asking students to add detail to their writing, such as sensory details (see, hear, feel etc.), they need to develop their ideas first. This means <strong>writing more information about an idea.</strong>');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Sentence Type and Structure','There are four types of sentences which vary in structure: <strong>simple, compound, complex and compound-complex</strong>.  A variety of sentence structures within a text keeps the reader interested by creating fluent prose.');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Elaborating on Ideas','<strong>Selecting what is most important</strong> within a piece of writing and then adding more detail or developing the idea further.  For example, in the book <i>Charlie and the Chocolate Factory</i>, Roald Dahl dedicates almost a whole page to describe the moment Grandpa Jo realises that Charlie has found the golden ticket. Dahl emphasises the <strong>importance</strong> of this moment in the story by elaborating on the idea using lots of detail.');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Ending / Conclusion','The ending of a piece<strong> forms the reader''s final impression of what they have read. </strong>The style and purpose of an ending will vary depending on text type. For nonfiction, endings are called conclusions.');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Figurative Language','<div class="glossaryItemBody">When a writer describes something by comparing it to something else, they are using figurative language. Some examples of figurative language are <strong>metaphors, similes, hyperbole and personification</strong>.</div>');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Finding Ideas','A formulated <strong>thought or opinion </strong>based on personal experience or generated by a prompt. Ideas are the main message or topic.');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Grammar Usage','<strong>Constructing sentences that make sense to a reader</strong> when read aloud by employing the rules of language.');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Handwriting / Mark Making','<strong>Handwriting</strong> includes both print and cursive styles, letter formation and directionality. <strong>Mark making </strong>refers to any line, pattern or shape students make on a surface with a writing implement to represent meaning.  For example, a student may draw a picture and label it with a mark that looks more like a squiggle rather than legible writing.');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Language Features and Text Structures','<strong>Text structure</strong> refers to how the text is organised.  For example, a narrative has an orientation, complication and resolution structure. <strong>Language features</strong> refer to the types of words and phrases in texts and the meaning they represent.  Language features are strongly tied to purpose and audience.  For example, some of the language features that support a persuasive argument are emotive words, exaggeration, and metaphors.');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Modality','Modality is the words we use to express the degree something is possible, likely, certain or permitted.  Modality can be demonstrated through careful choice of verbs, adverbs, adjectives and nouns.  Modal words are categorised as either high, medium or low modality. For example:<ul><li>Exercising <em>''will'' help you stay fit</em> (high modality).</li><li><em>Exercising ''might'' help you stay fit </em>(low modality)<em>.</em></li></ul>');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Narrowing Ideas','Helps student move from a <strong>general topic to a narrow, specific</strong> area within that topic. Rather than write about five events that happened on the weekend with few details, better to write about one or two important events with lots of supporting detail.');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Language for Written Texts','<strong>Natural language consists of everyday high-frequency words such as said, then and because.</strong> Writers need to use a combination of interesting and everyday words, so their writing is easy to read and feels balanced.');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Pacing','<strong>How fast a story unfolds or develops</strong>. It is linked to elaborating ideas. In the <i>Charlie and the Chocolate Factory </i>example from Elaborating Ideas, Roald Dahl slowed down the pace when describing the moment Charlie found the ticket. Pacing determines the length of a scene. <strong>For example:</strong> Fast Pace: I woke up bright and early and got ready for school. (Telling) Slow Pace: Sun streamed through a crack in my blind and hit me right in the left eye. As I slowly, and with great effort, opened my eyes, it dawned on me that the weekend was well and truly over… (Showing)');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Paragraphing','<strong>A paragraph is a group of sentences about one idea. </strong>Paragraphs usually consist of a topic sentence and supporting details.');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Precise Language','<strong>Using specific nouns and verbs helps readers create strong mental images in their minds</strong>. Instead of dog, better to be specific and say poodle. If writers are not specific, readers will fill in the gaps based on their own schema or personal experience.');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Punctuation','<strong>Marks used in writing to separate sentences and clarify meaning</strong>. These include full stops, questions marks, exclamation marks, commas and semicolons.');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Purpose and Audience','The <strong>purpose</strong> of a text is its aim; the reason you are writing.  This can include, to persuade, inform or entertain.  The <strong>audience</strong> is the reader.  Writer''s need to consider both purpose and audience when composing texts, which will then inform the structure and language features.&nbsp;');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Retell / Summarising','Retelling involves describing experiences or written texts with a high level of detail, usually in chronological order.  Summarising involves retelling the most important parts of an experience or text.   Summaries are usually brief, whereas a retell can be lengthy.');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Revision and Editing','Revision is a large part of the writing process and can involve redrafing a text several times to enhance meaning, ideas and clarity.  During this process a writer may add or omit details, review word choices, restructure sentences and ask for feedback.  Editing involves checking a text for errors in spelling, grammar, punctuation and paragraphing and making corrections before publishing.');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Sentence Beginnings','<div class="glossaryItemTitle"><strong>Good writing uses a variety of sentence beginnings to avoid monotony and improve sentence fluency.</strong> Choice of sentence beginnings will vary depending on the text type. For example, a procedural text will often begin with a verb, however, a recount may begin with many time connectives such as ‘After lunch we went…’</div>');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Sentence Flow and Fluency','Sentence flow and fluency is the way words and phrases flow throughout a piece; how the writing plays to the ear, particularly when read aloud.  Writing with good sentence fluency should be easy to read and have a natural rhythm and invite expressive reading.');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Sentence Length','<strong>Texts flow more smoothly and are easier to read if there is variety in sentence length.</strong> Lots of short sentences sound choppy and are hard to read. Too many long sentences leave the reader mentally fatigued.');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Sequencing','A process that describes <strong>a series of events in some sort of order</strong>.  It is usually based on time or steps.');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Software / Digital Media (Multimodal)','Software/Digital media refers to any digital media used to create or enhance texts.  This includes PowerPoint, word processing programs, photography, video.');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Spelling','The <strong>combination</strong> (order) of letters that form a word.');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Text Patterns','Text patterns refer to <em>how </em>ideas are organised within a text.  Common text patterns include, chronological, compare and contrast, cause and effect, problem and solution and sequel.');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Vocabulary','The range of words used in texts to enhance meaning and support the author''s purpose.');
INSERT INTO skills(skill_Name,skill_def) VALUES ('Writer’s Voice (Tone)','The distinctive manner or personality telling the story or providing the information is the writer’s voice.  It''s the attitude the writer has towards the subject matter.  Writer''s voice can also be described as a feeling that there is a real person behind the words talking to you, the reader.');
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (2,11);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (2,30);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (3,12);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (1,13);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (4,26);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (6,2);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (2,1);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (3,19);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (3,17);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (4,15);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (7,5);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (7,4);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (1,18);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (2,21);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (1,8);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (1,10);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (5,29);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (2,20);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (4,23);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (2,6);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (7,3);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (7,7);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (5,27);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (4,14);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (4,33);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (3,22);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (7,31);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (7,25);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (3,34);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (5,9);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (6,24);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (5,28);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (2,16);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (6,35);
INSERT INTO skills_traits(skills_traits_traits_trait_Id,skills_traits_skills_skill_Id) VALUES (4,32);
INSERT INTO curriculum_scriibi_levels(curriculum_Id,global_level,local_level) VALUES (1,119,119);
INSERT INTO curriculum_scriibi_levels(curriculum_Id,global_level,local_level) VALUES (1,121,121);
INSERT INTO curriculum_scriibi_levels(curriculum_Id,global_level,local_level) VALUES (1,125,125);
INSERT INTO curriculum_scriibi_levels(curriculum_Id,global_level,local_level) VALUES (1,129,129);
INSERT INTO curriculum_scriibi_levels(curriculum_Id,global_level,local_level) VALUES (1,133,133);
INSERT INTO curriculum_scriibi_levels(curriculum_Id,global_level,local_level) VALUES (1,137,137);
INSERT INTO curriculum_scriibi_levels(curriculum_Id,global_level,local_level) VALUES (1,141,141);
INSERT INTO curriculum_scriibi_levels(curriculum_Id,global_level,local_level) VALUES (1,145,145);
INSERT INTO curriculum_scriibi_levels(curriculum_Id,global_level,local_level) VALUES (1,149,149);
INSERT INTO curriculum_scriibi_levels(curriculum_Id,global_level,local_level) VALUES (1,153,153);
INSERT INTO curriculum_scriibi_levels(curriculum_Id,global_level,local_level) VALUES (1,157,157);
INSERT INTO curriculum_scriibi_levels(curriculum_Id,global_level,local_level) VALUES (1,161,161);
INSERT INTO curriculum_scriibi_levels(curriculum_Id,global_level,local_level) VALUES (2,121,121);
INSERT INTO curriculum_scriibi_levels(curriculum_Id,global_level,local_level) VALUES (2,125,125);
INSERT INTO curriculum_scriibi_levels(curriculum_Id,global_level,local_level) VALUES (2,129,129);
INSERT INTO curriculum_scriibi_levels(curriculum_Id,global_level,local_level) VALUES (2,133,133);
INSERT INTO curriculum_scriibi_levels(curriculum_Id,global_level,local_level) VALUES (2,137,137);
INSERT INTO curriculum_scriibi_levels(curriculum_Id,global_level,local_level) VALUES (2,141,141);
INSERT INTO curriculum_scriibi_levels(curriculum_Id,global_level,local_level) VALUES (2,145,145);
INSERT INTO curriculum_scriibi_levels(curriculum_Id,global_level,local_level) VALUES (2,149,149);
INSERT INTO curriculum_scriibi_levels(curriculum_Id,global_level,local_level) VALUES (2,153,153);
INSERT INTO curriculum_scriibi_levels(curriculum_Id,global_level,local_level) VALUES (2,157,157);
INSERT INTO curriculum_scriibi_levels(curriculum_Id,global_level,local_level) VALUES (2,161,161);
insert into text_types(text_type_Name, text_type_Desc) values('Narrative', "This is a decrription for a Narrative text type");
insert into text_types(text_type_Name, text_type_Desc) values('Recount', "This is a decrription for a Recount text type");
insert into text_types(text_type_Name, text_type_Desc) values('Information Report', "This is a decrription for a Information Report text type");
insert into text_types(text_type_Name, text_type_Desc) values('Persuasive', "This is a decrription for a Persuasive text type");
insert into text_types(text_type_Name, text_type_Desc) values('Explanation', "This is a decrription for a Explanation text type");
insert into text_types(text_type_Name, text_type_Desc) values('Procedural', "This is a decrription for a Procedural text type");
insert into text_types(text_type_Name, text_type_Desc) values('Description', "This is a decrription for a Description text type");
insert into text_types(text_type_Name, text_type_Desc) values('Transactional', "This is a decrription for a Transactional text type");
insert into text_types(text_type_Name, text_type_Desc) values('Discussion', "This is a decrription for a Discussion text type");
insert into text_types(text_type_Name, text_type_Desc) values('Personal Response', "This is a decrription for a Personal Response text type");
insert into text_types(text_type_Name, text_type_Desc) values('Poetry', "This is a decrription for a Poetry text type");
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (1,1);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (1,3);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (1,8);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (1,9);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (1,9);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (1,10);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (1,11);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (1,12);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (1,13);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (1,18);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (1,19);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (1,20);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (1,29);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (1,34);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (2,3);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (2,9);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (2,12);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (2,13);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (2,18);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (2,19);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (2,30);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (3,11);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (3,21);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (3,22);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (4,3);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (4,5);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (4,9);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (4,10);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (4,11);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (4,13);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (4,17);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (4,21);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (4,24);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (4,34);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (4,35);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (5,22);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (5,30);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (5,34);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (6,6);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (6,22);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (6,27);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (6,30);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (7,22);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (7,25);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (7,34);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (8,17);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (8,22);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (8,24);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (9,3);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (9,11);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (9,17);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (10,3);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (10,17);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (10,25);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (11,9);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (11,12);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (11,28);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (11,34);
INSERT INTO text_types_skills(text_types_skills_text_type_Id,text_types_skills_skill_Id) VALUES (11,35);
insert into global_criterias(description) values ('	Can retell a familiar text or event by sequencing two to three images and simple statements.');
insert into global_criterias(description) values ('	Can review own text and make changes during shared editing. Can use delete and Caps Lock function and check their name and font sizes.');
insert into global_criterias(description) values ('	Understands that letters can be represented as written text.  Copies letters and numbers with some control.  Can hold a pencil using a tripod grip.');
insert into global_criterias(description) values ('	Can verbally add additional information about a topic when prompted.');
insert into global_criterias(description) values ('	Can copy own name and recognise some letters within it.  Understands that a full stop represents a pause.');
insert into global_criterias(description) values ('	Use software or application (app) to match images and simple sentences.  For example, matches a picture of a cat with the word cat.');
insert into global_criterias(description) values ('	Can identify the onset of familiar words and some words that have the same rime. Can identify objects that start with the same letter as their name.');
insert into global_criterias(description) values ('	Ties up events with a predictable or simple closing sentence (They lived happily every after, The end, It was fun).	');
insert into global_criterias(description) values ('	Can draw or write three or more simple sentences, to sequence a familiar story or personal experience, based on time and steps.');
insert into global_criterias(description) values ('	Participates in shared editing for own text for meaning, spelling, capital letters and full stops.');
insert into global_criterias(description) values ('	Can draw a character, real or imagined, with close up details that show emotion and action. For example, a girl smiling on a swing.');
insert into global_criterias(description) values ('	The introductory sentence reveals the texts'' purpose or topic. For example, "On the weekend", "I went to a birthday party."');
insert into global_criterias(description) values ('	Understands how written texts are unlike everyday spoken language.  Can explain some rules for written texts, such as spaces between words, writing left to right and correct spelling.');
insert into global_criterias(description) values ('	Understands that sounds are represented by upper and lower-case written letters. Can use correct posture and pencil grip. Writes letters with correct formation after a clear demonstration. Writes words using lower-case letters. Learning to construct some upper-case letters.');
insert into global_criterias(description) values ('	Understands that words convey a message and every book has a front, back, title and author. Understands features of print text, for example directionality, return sweep and spaces between words.');
insert into global_criterias(description) values ('	The topic is defined with either a title or a topic sentence.  However, the writer jumps from one idea to the next.');
insert into global_criterias(description) values ('	Can write additional information about a topic.');
insert into global_criterias(description) values ('	Understands that punctuation is different from letters and can point out capitals and full stops.  Knows that capitals and full stops signal the beginning and end of a sentence.');
insert into global_criterias(description) values ('	Can create short texts to explore, record and report ideas and events using some content familiar words and beginning writing knowledge (writing from left to right, top to bottom).');
insert into global_criterias(description) values ('	Beginning to recognise the stem of a word and can add suffixes "ing", "s", "ed". For example, will add "s" on the word "dog" to show more than one.   Word order is mostly correct, but often only writes root words (They live happy every after).');
insert into global_criterias(description) values ('	Construct texts using software including word processing programs  Can use simple functions of keyboard and mouse including typing letters, scrolling, selecting icons and drop-down menu.');
insert into global_criterias(description) values ('	Retell familiar literary texts through performance, use of illustrations and images.');
insert into global_criterias(description) values ('	Discusses new vocabulary found in texts. Builds vocabulary by discussing everyday experiences, personal interests and topics taught at school.');
insert into global_criterias(description) values ('	Understands that word order in sentences is important for meaning (for example, "The dog sat on the mat", rather than, "The mat sat on the dog".');
insert into global_criterias(description) values ('	Can accurately write consonant-vowel-consonant words. Writes a small range of high frequency and familiar words (fish, they). Building word families using onset and rime (sh/op, st/op).');
insert into global_criterias(description) values ('	Resolves writing with a closing sentence that links to events in the text,  leaving the reader satisfied. (I hope we go back next year).');
insert into global_criterias(description) values ('	Events are written in order with a clear beginning, middle and end.  There is little to no evidence of sequencing ideas using connectives.');
insert into global_criterias(description) values ('	Can create a simile for a card or similar text type, but does not use similes in longer texts (narratives, recounts).');
insert into global_criterias(description) values ('	Can find ideas for imaginative and informative texts with support using graphic organisers.');
insert into global_criterias(description) values ('	Rereads own text and can make some changes to improve meaning (adding adjective to noun), spelling and punctuation.');
insert into global_criterias(description) values ('	Can describe characters'' physical appearance using adjectives and nouns (red dress). Experimenting using dialogue.');
insert into global_criterias(description) values ('	The introductory sentence reveals the texts'' purpose or topic. They include some setting details (where and when). "I live next door to a haunted house."');
insert into global_criterias(description) values ('	Writes legible words using unjoined upper and lower case letters (may use incorrect case - plaYed). Script is of a reasonably consistent size. Is learning correct formation and directionality using correct posture and pencil grip.');
insert into global_criterias(description) values ('	The topic is well defined.  The writer stays on topic but includes irrelevant off-topic information or details.');
insert into global_criterias(description) values ('	Writes multiple ideas, with some supporting details.');
insert into global_criterias(description) values ('	All ideas are given equal importance and the writer does not elaborate on any one particular idea.');
insert into global_criterias(description) values ('	Sentences are of similar length.');
insert into global_criterias(description) values ('	Understands the purpose of full stops, question marks, and exclamation marks.  Most sentences have a capital letter and full stop.  Can write a question and statement using appropriate punctuation.');
insert into global_criterias(description) values ('	Uses connectives to link clauses (and), and sequence events (then).');
insert into global_criterias(description) values ('	Can create short imaginative and informative texts showing an understanding of basic text structures and features (beginning, middle, end, title, headings).');
insert into global_criterias(description) values ('	Applies grammar rules to texts.  Can build word families from common morphemes by recognising the stem in words "walk/ed".  For example, "play", "plays", "played", "playground".');
insert into global_criterias(description) values ('	Can order events chronologically (by time).  For example, "I woke up early and then went to school".  Can sequence procedural texts (First, then).');
insert into global_criterias(description) values ('	Is introduced to differences in words to represent people, places and things, verbs, adjectives and adverbs.  Can (with support) replace a common noun and verb with a specific one.  For example, instead of the noun "drink" will write "tea".');
insert into global_criterias(description) values ('	Compose a story or information sequence that incorporates supporting images and captions using software including word processing programs.');
insert into global_criterias(description) values ('	Can retell and recreate simple texts imaginatively using drawing, writing, performance and digital forms of communication.  Includes plot details, characters, setting, conflicts and resolutions.  Uses similar vocabulary in known texts.');
insert into global_criterias(description) values ('	Appropriate vocabulary matches audience and purpose ("Dear" Mr Jones).  Key/topic words represent ideas and clearly convey the  intended message (The volcano erupted).  Experimenting with sensory descriptive words.');
insert into global_criterias(description) values ('	Can write a grammatically correct simple sentence with correct punctuation. Can identify different parts of a simple sentence that represent what is happening and who or what is involved.');
insert into global_criterias(description) values ('	Can match familiar texts with an audience.  For example, knows that an ABC book is written for young children.');
insert into global_criterias(description) values ('	Writes a large range of familiar and high frequency words.  Can spell one and two syllable words with common letter patters. Can write words with long and short vowels ("hat", "hate").');
insert into global_criterias(description) values ('	For narrative, has a clear and predictable resolution for plot and character conflicts. For persuasive, concludes with a common phrase (In conclusion, So,) and restates the main argument.');
insert into global_criterias(description) values ('	Writing is organised with a clear beginning, middle and end. Can write four or more sequenced events or ideas using connectives.');
insert into global_criterias(description) values ('	Can use common similes to describe people, places or things. Is experimenting with original similes, hyperbole and onomatopoeia.');
insert into global_criterias(description) values ('	Independently finds original ideas from a range of sources  (visual prompts, personal experience,  observations) to create imaginative texts.');
insert into global_criterias(description) values ('	Rereads text and responds to teacher and peer feedback to edit text for spelling, sentence-boundary punctuation and text structure (precise nouns for information text) to  improve text.');
insert into global_criterias(description) values ('	Can describe some physical attributes of characters and depict their actions and thought processes in narratives using adjectives, verbs and dialogue.');
insert into global_criterias(description) values ('	Writes a simple orientation with character (who) and setting details (where and when). May experiment with hooks to engage the reader. Persuasive texts: begins with a hook and a statement thesis.');
insert into global_criterias(description) values ('	Writes words and sentences legibly using unjoined upper- and lower-case letters that are applied with growing fluency using an appropriate pen/pencil grip and body position.  Print script is of consistent size.');
insert into global_criterias(description) values ('	Understand that different types of texts have identifiable text structures and language features that help the text serve its purpose. Students can identify the topic and type of text based on it''s visual presentation.');
insert into global_criterias(description) values ('	The topic is broad, but the writer generally stays on topic.');
insert into global_criterias(description) values ('	Attempts to organise work by separating ideas.  Understands that paragraphs are a key organisational feature.');
insert into global_criterias(description) values ('	Writes relevant details to support ideas with text.');
insert into global_criterias(description) values ('	With support, identifies important ideas within a text and can add detail using adjectives and/or the five senses.	');
insert into global_criterias(description) values ('	There is some variation in sentence length through correct placement of full stops and/or dialogue.	');
insert into global_criterias(description) values ('	Some evidence of pacing. The writer has included more detail in the main body of a text.  For example: In a narrative, the orientation and ending are of similar length, and the middle is considerably longer.	');
insert into global_criterias(description) values ('	Can use boundary punctuation (Capitals/full stops). Some proper nouns are capitalised (names, title). Intentionally uses punctuation (?!,"")	');
insert into global_criterias(description) values ('	Uses common connectives to signal a shift in time (later), sequence (next, after that) and add information (and, so).	');
insert into global_criterias(description) values ('	Can make parts of a text more cohesive using devices such as pronouns and connectives.'	);
insert into global_criterias(description) values ('	Can create short imaginative, informative and persuasive texts using growing knowledge of text structures and language features	');
insert into global_criterias(description) values ('	Some variation in sentences beginnings including proper nouns, pronouns, prepositional phrases (On, At), time and sequence transitions (Later, Then), subordinating conjunctions (While, After, Because).	');
insert into global_criterias(description) values ('	Understands that nouns represent people, places, concrete objects and abstract concepts (ideas).  Can expand noun groups/phrases using articles (a, an, the) and adjectives. For example, "I ate a big red apple".	');
insert into global_criterias(description) values ('	Understands and uses some precise words to represent people, places and things, verbs, adjectives and adverbs.  At this stage the writer uses precise words to create strong mental images, rather than avoid wordiness.	');
insert into global_criterias(description) values ('	Creating events, reconstructions of stories or poetry using different media which may include PowerPoint, Apps, word processing programs.	');
insert into global_criterias(description) values ('	Can create written summaries of familiar texts, including narrative plot summaries with basic information on setting, characters, conflicts and resolutions. May need a scaffold (e.g. story map) for support.	');
insert into global_criterias(description) values ('	Conscious choices of vocabulary suit the audience and purpose. Uses some ambitious content words.  Modifying words ("very" excited) and common expressions ("I guess I''ll try harder next time") enhance meaning.');
insert into global_criterias(description) values ('	Can create a compound sentence by connecting simple sentences or independent clauses with conjunctions  (and, but, so, because).  For example, "I went to the beach and I got sunburn".	');
insert into global_criterias(description) values ('	Can identify the audience and purpose of a text and explain their reasoning based on text structure and language features.');
insert into global_criterias(description) values ('	Uses some features of text organisation, including headings, subheadings, basic beginning, middle and end narrative structure.');
insert into global_criterias(description) values ('	Some attempts to engage readers through devices like: rhetorical questions, inverted commas, exclamation marks to add emphasis.');
insert into global_criterias(description) values ('	Uses digraphs, blends, long vowels, silent letters, syllabification to spell simple and compound words. Can spell most high-frequency words accurately and some words that cannot be sounded out (phone).');
insert into global_criterias(description) values ('	For imaginative texts, experiments with different endings (dialogue, humour, profound thought). For persuasive, introduces a concluding paragraph (In conclusion, To sum up), restates the main argument and summarises key points.');
insert into global_criterias(description) values ('	Information is sequenced logically and effectively, enhancing understanding and readability. Sentences are sequenced to reflect a logical and smooth flow of ideas.	');
insert into global_criterias(description) values ('	Uses a variety of figurative language for effect (similes, metaphors, hyperbole, alliteration, personification).');
insert into global_criterias(description) values ('	Independently finds interesting ideas from a range of sources  (visual prompts, personal experience, observations, texts) to create a range of different literary texts.');
insert into global_criterias(description) values ('	Revises (drafts) text to improve ideas, meaning and text structure for audience and purpose. Self and peer edits texts for spelling, grammatical choices and punctuation.');
insert into global_criterias(description) values ('	Characters personality and/or physical traits are revealed throughout the text. ("Mia was 10 years old.  She was nervous about starting at a new school.").	');
insert into global_criterias(description) values ('	Narrative: Attempts to hook the reader (Bang!, surprise fact, dialogue), includes some character and setting details.  Persuasive text: includes a hook, background/context on the topic and a thesis statement. Information text: Opening sentence and description of topic.');
insert into global_criterias(description) values ('	Write using joined letters that are clearly formed and consistent in size.   Practising how to join letters to construct a fluent handwriting style.');
insert into global_criterias(description) values ('	The topic is narrow and focused on the main idea.');
insert into global_criterias(description) values ('	Understands that paragraphs are a key organisational feature of written texts.  Understands and there is evidence of attempts to paragraph when the topic, speaker, place or time changes.');
insert into global_criterias(description) values ('	Relevant and quality details support ideas within texts.');
insert into global_criterias(description) values ('	Identifies important ideas within a text and adds relevant detail using precise nouns, verbs, adjectives and strategies such as "show don''t tell."');
insert into global_criterias(description) values ('	Varied sentence length is used to enhance fluency and readability.');
insert into global_criterias(description) values ('	Can manipulate the pace by using strategies such as "Show don''t Tell" or increasing descriptive detail for important events within a narrative or recount.');
insert into global_criterias(description) values ('	Uses full stops, capitals, question marks, commas and exclamation marks (80%+ accuracy).  Experimenting with other punctuation (''... "").');
insert into global_criterias(description) values ('	Uses connectives to link ideas (and, because), signal a shift in time or setting (later on) and contrast ideas (although, yet).	');
insert into global_criterias(description) values ('	Is experimenting with a range of linking devices to make texts more cohesive, including pronouns, connectives, synonyms and word associations (e.g. words that refer to the main character).');
insert into global_criterias(description) values ('	Can plan, draft and publish imaginative, informative and persuasive texts demonstrating increasing control over text structures and language features.');
insert into global_criterias(description) values ('	Sentences beginnings are varied. Experimenting with  different beginnings to make writing interesting, including prepositional phrases, a range of transitions, proper nouns, verbs, adjectives and subordinating conjunctions.	');
insert into global_criterias(description) values ('	Sentences have subject verb agreement.  Correct and appropriate (informal contexts) use of word contractions.  Exploring a range of verbs (action, thinking, sensing).  Can use apostrophe to show possession for singular nouns (the cat''s toy).');
insert into global_criterias(description) values ('	Uses precise and accurate words throughout text to create strong mental images and enhance meaning, including some topic specific vocabulary.  For example, "teammates", instead of "other players".');
insert into global_criterias(description) values ('	Use software including word processing programs with growing speed and efficiency to plan, sequence, compose and edit texts featuring visual, print and audio elements. Familiar with hyperlinks, navigation bars and buttons.');
insert into global_criterias(description) values ('	Can create a summary for events/experiences and familiar fictional texts, including relevant information on characters, setting, conflicts and resolutions.  Can skim non-fiction texts and note key points or main ideas.');
insert into global_criterias(description) values ('	Consistent use of precise, modal, and technical (habitat) content words to express opinion and enhance meaning.  Experimenting with some ambitious adjectives, adverbs and phrases.');
insert into global_criterias(description) values ('	Can create complex sentences using subordinating conjunctions. For example, "After the game, we celebrated with a team dinner".	');
insert into global_criterias(description) values ('	Chooses appropriate text types and language features to suit both audience and purpose.');
insert into global_criterias(description) values ('	Variation in sentence length and sentence beginnings enhances flow and fluency in parts of the text.');
insert into global_criterias(description) values ('	Uses language features and organisational patterns to support texts. For example, writes numbered steps for a procedural text and begins each step with a verb.');
insert into global_criterias(description) values ('	The writer is clearly engaged in the topic and developing a strong voice.  For example, may use interjections to reflect a feeling or their opinion (Yay!, Finally!).');
insert into global_criterias(description) values ('	Can spell most unknown polysyllabic words using strategies and patterns: diphthongs (ai, oy), single syllable homophones (ate/eight), plural (-s,-es), and past tense (-ed).');
insert into global_criterias(description) values ('	For imaginative texts, has a satisfying ending appropriate for audience and purpose. Persuasive text concludes by restating the main contention and  summarising key arguments with a call to action.');
insert into global_criterias(description) values ('	Uses a range of common figurative language (similes, metaphors, hyperbole, alliteration, personification).  Is experimenting with oxymorons (It was seriously funny, we have a love-hate relationship).');
insert into global_criterias(description) values ('	Confidently finds interesting and original ideas from a range of sources  (visual prompts, personal experience, observations, texts, inspiration from historical person/event).');
insert into global_criterias(description) values ('	Revises and edits text to improve ideas, meaning, word choice and text structure to fit audience and purpose.');
insert into global_criterias(description) values ('	Characters are made memorable through descriptive and relevant detail (noun/adjective phrases) that contribute to the sequence of events ("Her stomach tightened as she walked on stage.").');
insert into global_criterias(description) values ('	Narrative: Engaging orientation with a hook, character and setting details.  Persuasive text: includes a hook, background/context on the topic and a thesis statement. Information text: Includes a hook and description of topic.');
insert into global_criterias(description) values ('	Handwriting is neat using clearly-formed joined letters.  Is developing increased fluency with speed and automaticity for a wide range of tasks.');
insert into global_criterias(description) values ('	The topic is interesting and focused on the main idea.');
insert into global_criterias(description) values ('	Can organise text using paragraphs when the topic, speaker, time or location changes.  For information texts, some evidence of organising longer texts with topic sentences and supporting details.');
insert into global_criterias(description) values ('	Ideas are supported and enriched using noun groups/phrases, verb groups/phrases and prepositional phrases. For example: Narrative texts, "their very friendly neigbour, who always says hello"; in reports, "At sunrise, during low tide, you can walk to the island."');
insert into global_criterias(description) values ('	Ideas are supported and enriched using noun groups/phrases, adjectives and prepositional phrases. For example, "All through the night, the scared dog barked."');
insert into global_criterias(description) values ('	Varied sentence length is used thoughtfully to enhance fluency and for effect.  For example, the writer creatively uses interjections or short two word phrases.');
insert into global_criterias(description) values ('	Writes with more detail during climatic plot points to build tension.  Uses strategies such as "Show don''t Tell" and descriptive detail to slow down the pace and focus on important events.');
insert into global_criterias(description) values ('	Uses full stops, commas, exclamation and question marks accurately. Can use other punctuation (''... "":) accurately.');
insert into global_criterias(description) values ('	Uses common and some sophisticated connectives appropriate to purpose in text (however, therefore, in addition, in summary).');
insert into global_criterias(description) values ('	Makes cohesive links throughout the text using linking devices, including pronouns (he, she, this, that, the, those, these), text connectives, word associations.');
insert into global_criterias(description) values ('	Can create imaginative, informative and persuasive texts with increasing control over structure, language features, storylines, characters and settings.  Creates texts that explore students’ own experiences.');
insert into global_criterias(description) values ('	Thoughtful, varied sentence beginnings signal to the reader how the text is developing.  Includes prepositional phrases, a range of transitions, proper nouns, verbs, adjectives and subordinating conjunctions.');
insert into global_criterias(description) values ('	Uses nouns, pronouns, plurals, tenses consistently and accurately throughout texts.  Uses adverbs and verbs to represent different processes with correct tense (He curiously smiled).');
insert into global_criterias(description) values ('	Uses precise and accurate words throughout text to create strong mental images and enhance meaning.  With support, can reword a sentence to make it more concise (less wordy) without sacrificing meaning.');
insert into global_criterias(description) values ('	Can select from a range of appropriate software to construct, edit and publish written text, and select, edit and include visual, print and audio elements.  Can discuss differences between print and digital information. Can touch type 20-30 wpm.');
insert into global_criterias(description) values ('	Can write a concise summary with relevant information for events/experiences and fictional texts.  Can skim non-fiction texts and note key points or main ideas, omitting small details.');
insert into global_criterias(description) values ('	Uses expressive verbs (transformed, pleaded) and less predictable imaginative and technical words and phrases, drawn from a range of sources (thesaurus, own research, imitating similar texts).');
insert into global_criterias(description) values ('	Creates richer and more specific descriptions using prepositional, noun and verb groups/phrases.  Uses a range of simple, compound and complex sentences to express ideas.');
insert into global_criterias(description) values ('	The author has considered point of view (first/third person), topic, text structure and language features to support the intended audience and purpose.');
insert into global_criterias(description) values ('	Sentences flow smoothly, and do not feel choppy.  The text is easy and enjoyable to read aloud.');
insert into global_criterias(description) values ('	Experimenting with the use of quotation marks to signal dialogue, titles and quoted (direct) speech. Language features and organisational patterns support texts.');
insert into global_criterias(description) values ('	The author''s voice is clearly evident throughout the text through careful word choice and other devices like: rhetorical questions, inverted commas, exclamation marks, interjections, sarcasm.');
insert into global_criterias(description) values ('	Uses phonic and visual knowledge and spelling patterns to spell unfamiliar words. May use syllabification, letter combinations, double letters, word families, silent beginning patterns ("kn" and "gn").');
insert into global_criterias(description) values ('	Satisfying conclusion using appropriate language and text features for purpose and audience. Experiments with different endings (a twist, implied, unresolved or circular ending).');
insert into global_criterias(description) values ('	Creatively uses a range of figurative language to fit purpose and audience.  Hyperbole and sarcasm in persuasive texts, and  personification for poetry.');
insert into global_criterias(description) values ('	Revises and edits own and others'' text using agreed criteria to improve organisation of ideas, meaning, word choice, sentence fluency and text structure.');
insert into global_criterias(description) values ('	Characters have depth and personality. Their intentions and motivations drive the piece and the author has made attempts to help the reader form an emotional connection with the protagonist.');
insert into global_criterias(description) values ('	Experimenting with or imitating different openings to develop a strong narrative and/or persuasive voice.  E.g. "I hid under my blankets, as water pelted the old tin roof and the sky lit up like a firecracker."');
insert into global_criterias(description) values ('	Can identify degrees of modality in texts.  Example: I will get up early. (high modality). I might get up early. (low modality).');
insert into global_criterias(description) values ('	Developing a handwriting style that is becoming legible, fluent and automatic.');
insert into global_criterias(description) values ('	Can organise texts using paragraphs when the topic, speaker, time or location changes. For information texts, organises longer texts with topic sentences and supporting details.');
insert into global_criterias(description) values ('	Person, place, thing or idea within various text types is supported and enriched using adjectives, prepositions, and noun and verb groups/phrases.  For example: Narrative texts, "Their very friendly neighbour, who always says hello, gave them the cold shoulder"; in reports, "At sunrise, during low tide, you can walk to the island."');
insert into global_criterias(description) values ('	Varied sentence length is used thoughtfully for different text types to support meaning, for fluency and effect.  For example, in a procedural text, the writer uses short, concise sentences.');
insert into global_criterias(description) values ('	Pacing is generally controlled, with the author showing attempts to provide different amounts of information and level of detail to speed up or slow down events.');
insert into global_criterias(description) values ('	"Uses a range of punctuation accurately to support meaning. (, . ? ! '' "" "" : ...)"	');
insert into global_criterias(description) values ('	Effectively uses a range of connectives to compare and contrast (similarly, by contrast), elaborate (additionally) and conclude (to sum up).');
insert into global_criterias(description) values ('	Makes cohesive links within and between sentences using a range of pronouns (he, she, this, that, the, those, these) text connectives and synonyms to avoid repetition and improve flow.');
insert into global_criterias(description) values ('	Can plan, draft and publish imaginative, informative and persuasive texts and create texts using realistic and fantasy settings and characters that draw on worlds represented in texts students have experienced.');
insert into global_criterias(description) values ('	A range of thoughtful and interesting sentence beginnings gives prominence to the message, links ideas smoothly and allows for prediction of how the text will unfold. See ELABORATION for examples.');
insert into global_criterias(description) values ('	Correct use of apostrophe for plural nouns (my parents'' care) and to show possession for singular nouns (my mother''s cat).');
insert into global_criterias(description) values ('	Precise language is used to create greater precision and avoid wordiness. The author''s message is clear and easy to understand. For example, instead of "cut", uses "shred", "slice", "dice".');
insert into global_criterias(description) values ('	Use a range of software including word processing programs to construct, edit and publish written text, and select, edit and place visual, print and audio elements. Can write and send emails. Can touch type 30-40 wpm.');
insert into global_criterias(description) values ('	Can represent the main ideas of any text or event/experience in a short written summary using concise language. For example, substitutes "oak, pine, gum and maple trees" with "trees".	');
insert into global_criterias(description) values ('	Experimenting with vocabulary choices, including evaluative language to expresses greater precision of meaning and effect. (She was the "most" "frightful" person I had met).');
insert into global_criterias(description) values ('	Uses complex sentences to make connections between ideas.  Understands the difference between main and subordinate clauses.	');
insert into global_criterias(description) values ('	Variation in sentence length, structure and word choice creates a pleasing and natural rhythm and cadence.');
insert into global_criterias(description) values ('	Appropriate use of quotation marks to signal dialogue, titles and quoted (direct) speech. Language features and organisational patterns support texts.');
insert into global_criterias(description) values ('	Adapts the right tone (humorous, sarcastic, assertive, informative) to suit the topic, audience and purpose.  Confident and appropriate language draws the reader in.');
insert into global_criterias(description) values ('	Recognise and write less familiar words that share common letter patterns but have different pronunciations.  For example, the "ou" in "journey", "your", "tour", "sour".');
insert into global_criterias(description) values ('	Satisfying ending using sophisticated language and text features for purpose and audience.');
insert into global_criterias(description) values ('	Creatively uses figurative language to fit purpose and audience. Experimenting with idioms, irony (sarcasm) and allusion.');
insert into global_criterias(description) values ('	Revises and edits own and others'' work using agreed criteria. Makes changes appropriate to task and audience: cohesion, sequencing, vocabulary and a range of literary devices (humour, pathos).');
insert into global_criterias(description) values ('	Direct (telling) and indirect  (show don''t tell) characterisation techniques describe character traits, giving them depth and personality. Literary devices (flashbacks and foreshadowing) reveal their intentions and motivations.');
insert into global_criterias(description) values ('	Writes a strong opening with an understanding of audience and purpose. Creatively uses imagery to to describe setting. Has a strong voice that sets the mood and tone of the piece.');
insert into global_criterias(description) values ('	Expresses a stronger point of view through choices of modal verbs, adverbs, adjectives or nouns. For example: "We must care for elderly citizens", uses a high modality verb "must".');
insert into global_criterias(description) values ('	Develop a handwriting style that is legible, fluent and that can vary depending on audience and purpose, including word processing programs to create texts.');
insert into global_criterias(description) values ('	Compare texts including media texts (news reports) that represent ideas and events in different ways, and explaining the effects of the different approaches.  For example, comparing advertisements from two different countries.');
insert into global_criterias(description) values ('	Can organise texts using paragraphs when the topic, speaker, time or location changes. For information texts, organises longer texts with topic sentences, elaborations and some closing sentences.');
insert into global_criterias(description) values ('	Ideas for various text types are expanded and enriched through careful choice of precise verbs.  Uses a range of prepositional and adverb, noun, and verb group/phrases with correct tense. For example, "In the morning, around 10am, I began training for the race." Uses conjunctions in complex sentences to extend ideas.');
insert into global_criterias(description) values ('	Pacing is controlled throughout the whole piece, with the author giving the right amount of information and level of detail to speed up or slow down events to hold the reader''s attention.');
insert into global_criterias(description) values ('	Uses a range of punctuation accurately. (, . ? ! '' "" "" : ...) Can use commas to separate a list and clauses in a sentence.');
insert into global_criterias(description) values ('	Some sophisticated connective phrases link ideas and enhance fluency (for this reason, equally important, on the whole).');
insert into global_criterias(description) values ('	Can use a range of devices that aid cohesion including pronouns, connectives, synonyms, antonyms, juxtaposition, substituting a specific word for a general one already mentioned (Borneo and Island).');
insert into global_criterias(description) values ('	Can plan, draft and publish imaginative, informative and persuasive texts, choosing and experimenting with text structures, language features, images and digital resources appropriate to purpose and audience.');
insert into global_criterias(description) values ('	Consistent and accurate use of apostrophes (plural and singular nouns) prefixes, pronouns, suffixes, compound words. All sentences have subject verb agreement with correct tense.');
insert into global_criterias(description) values ('	Sophisticated precise and accurate topic specific  vocabulary is used to create greater precision and avoid wordiness.  For example, instead of "front" of the boat, the author writes "bow" of the boat.  Effectively uses an active voice for information texts.');
insert into global_criterias(description) values ('	Confidently uses and explores a range of software, including word processing programs, learning new functions as required to create texts.  For example, may use CANVA to create a flyer.');
insert into global_criterias(description) values ('	Refined and appropriate vocabulary choices, including evaluative language, express shades of meaning, feeling and opinion ("Protesters stormed", "Peaceful protesters approached").');
insert into global_criterias(description) values ('	Uses complex sentences in a variety of ways to elaborate, extend and explain ideas. See VCELA350 ELABORATION for examples.');
insert into global_criterias(description) values ('	Sentence structure, word choice and at least one literary device (alliteration, consonance, repetition, rhyme) add to the overall fluency of the piece and invites expressive reading.');
insert into global_criterias(description) values ('	Can use a range of text structures and language features to support texts. For example, emotive language in persuasive texts, graph, table, and diagram for visual representations, sensory language to covey vivid pictures.');
insert into global_criterias(description) values ('	The author''s attitude towards the topic and their distinct personality is evident. Engages and involves the reader using higher order devices such as word play and innuendo ("if you know what I mean").');
insert into global_criterias(description) values ('	Can spell increasingly complex words using word origins, base words, prefixes, suffixes, spelling patterns, including technical words.');
insert into global_criterias(description) values ('	Satisfying and strong ending for purpose and audience.  Final sentences (thoughts) evoke inspiration, realisations or insights that linger in the reader''s mind.');
insert into global_criterias(description) values ('	Uses figurative language where fit, without overusing or sounding cliche.  Creatively engages readers using idioms, irony (sarcasm) and allusion (can be within a simile or metaphor).');
insert into global_criterias(description) values ('	Edits for meaning by removing repetition (concise), refining ideas, reordering sentences and adding or substituting words for impact.  Uses collaborative technologies to jointly construct and edit texts.');
insert into global_criterias(description) values ('	Characters are developed  through a variety of techniques: narration, dialogue, thoughts, and their interaction with other characters and the setting.');
insert into global_criterias(description) values ('	Writes a strong opening, with an understanding of audience and purpose.  Thoughtful word choice, using a strong voice that sets the mood and tone.  Appeals to emotion (pathos), logic (logos) and/or ethics (ethos) in persuasive introduction.');
insert into global_criterias(description) values ('	Expresses certainty in texts through choices of modal verbs, adverbs, adjectives and nouns. For example: "Regular exercise will improve your health", achieves certainty using the high modality verb "will".	');
insert into global_criterias(description) values ('	Consolidate a personal handwriting style that is legible, fluent and automatic and supports writing for extended periods.');
insert into global_criterias(description) values ('	Organises a variety of texts with well structured paragraphs, including initial and concluding paragraphs to create cohesion of ideas presented with a text.');
insert into global_criterias(description) values ('	Creatively controls the pace using just the right amount of detail and using one or more of the following: sentence length, shifting the focus to subplots, or time transitions.  The piece feels balanced.');
insert into global_criterias(description) values ('	Uses punctuation correctly to support meaning in texts for different sentence structures (complex, prepositional phrases, embedded clauses).');
insert into global_criterias(description) values ('	Connective words/phrases smoothly link ideas to compare and contrast (similarly, by contrast), elaborate (in particular), give examples (take for instance) and conclude (on the whole).');
insert into global_criterias(description) values ('	Complex texts are made coherent through cohesive devices (pronouns, connectives, synonyms) and text structure to guide readers.  For example, overviews, initial and concluding paragraphs, indexes, topic sentences.');
insert into global_criterias(description) values ('	Plan, draft and publish a range of texts, selecting subject matter, language, visual, and audio features to convey information and ideas to a specific audience.');
insert into global_criterias(description) values ('	Uses a range of software to create, edit and publish written and multimodal texts. Understands different conventions of software and can synthesise information in dot points, sequence information in presentations and time scenes in an animation.');
insert into global_criterias(description) values ('	Creatively uses a range of clause types to express, extend and develop ideas.');
insert into global_criterias(description) values ('	Well crafted sentences, intentional fragments, comma usage and stylistic features (adapted from similar texts) enhance readability and fluency.');
insert into global_criterias(description) values ('	Adapting a range of higher order stylistic features encountered in literary texts (flashbacks, multiple perspectives).  See ELABORATION for more examples.');
insert into global_criterias(description) values ('	Confidently uses a range of "voice" techniques to create effect and involve the reader.  The writer is developing a unique style that avoids cliches.');
insert into global_criterias(description) values ('	Uses spelling rules and patterns, word origins (Greek, Latin roots) to accurately spell new words. Can spell some common words from other languages (bon voyage, entree).');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1430','<p><strong>Content Description</strong></p><p>Understand that texts can take many forms, can be very short (for example an exit sign) or quite long (for example an information book or a film) and that stories and informative texts have different purposes.</p><p><strong>Elaboration</strong></p>Understand that texts can take many forms, can be very short (for example an exit sign) or quite long (for example an information book or a film) and that stories and informative texts have different purposes<p>Sharing experiences of different texts and discussing some differences.</p><p>Discussing the purpose of texts, for example ''This text will tell a story'', ''This text will give information''.</p><p>Repeating parts of texts, for example characteristic refrains, predicting cumulative storylines, reciting poetic and rhyming phrases.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1431','<p><strong>Content Description</strong></p><p>Understand that some language in written texts is unlike everyday spoken language.</p><p><strong>Elaboration</strong></p>Understand that some language in written texts is unlike everyday spoken language<p>Learning that written text in Standard Australian English has conventions about words, spaces between words, layout on the page and consistent spelling because it has to communicate when the speaker/writer is not present.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1432','<p><strong>Content Description</strong></p><p>Understand that punctuation is a feature of written text different from letters; recognise how capital letters are used for names, and that capital letters and full stops signal the beginning and end of sentences.</p><p><strong>Elaboration</strong></p>Understand that punctuation is a feature of written text different from letters; recognise how capital letters are used for names, and that capital letters and full stops signal the beginning and end of sentences<p>Pointing to the letters and the punctuation in a text.</p><p>Commenting on punctuation encountered in the everyday texts, for example ''That''s the letter that starts my name'', ''The name of my family and my town has a capital letter''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1433','<p><strong>Content Description</strong></p><p>Understand concepts about print and screen, including how books, film and simple digital texts work, and know some features of print, for example directionality.</p><p><strong>Elaboration</strong></p>Understand concepts about print and screen, including how books, film and simple digital texts work, and know some features of print, for example directionality<p>Learning about print: direction of print and return sweep, spaces between words.</p><p>Learning that Standard Australian English in written texts is read from left to right and from top to bottom of the page and that direction of print may differ in other cultures, for example Japanese texts.</p><p>Learning about front and back covers; title and author, layout and navigation of digital/screen texts.</p><p>Learning about simple functions of keyboard and mouse including typing letters, scrolling, selecting icons and drop-down menu.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1435','<p><strong>Content Description</strong></p><p>Recognise that sentences are key units for expressing ideas.</p><p><strong>Elaboration</strong></p>Recognise that sentences are key units for expressing ideas<p>Learning that word order in sentences is important for meaning (for example  ''The boy sat on the dog'', ''The dog sat on the boy'').</p><p>Creating students'' own written texts and reading aloud to the teacher and others.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1434','<p><strong>Content Description</strong></p><p>Recognise that texts are made up of words and groups of words that make meaning.</p><p><strong>Elaboration</strong></p>Recognise that texts are made up of words and groups of words that make meaning<p>Exploring spoken, written and multimodal texts and identifying elements, for example words and images.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1786','<p><strong>Content Description</strong></p><p>Explore the different contribution of words and images to meaning in stories and informative texts.</p><p><strong>Elaboration</strong></p>Explore the different contribution of words and images to meaning in stories and informative texts<p>Talking about how a ''different'' story is told if we read only the words, or only the pictures; and the story that words and pictures make when combined.</p><p>Exploring how the combination of print and images in texts creates meaning.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1437','<p><strong>Content Description</strong></p><p>Understand the use of vocabulary in familiar contexts related to everyday experiences, personal interests and topics taught at school.</p><p><strong>Elaboration</strong></p>Understand the use of vocabulary in familiar contexts related to everyday experiences, personal interests and topics taught at school<p>Building vocabulary through multiple speaking and listening experiences.</p><p>Discussing new vocabulary found in texts.</p><p>Bringing vocabulary from personal experiences, relating this to new experiences and building a vocabulary for thinking and talking about school topics.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1439','<p><strong>Content Description</strong></p><p>Recognise and generate rhyming words, alliteration patterns, syllables and sounds (phonemes) in spoken words.</p><p><strong>Elaboration</strong></p>Recognise and generate rhyming words, alliteration patterns, syllables and sounds (phonemes) in spoken words<p>Recognising and producing rhyming words when listening to rhyming stories or rhymes, for example ''funny'' and ''money''.</p><p>Identifying patterns of alliteration in spoken words, for example ''helpful Henry''.</p><p>Identifying syllables in spoken words, for example clapping the rhythm of ''Mon-day'', ''Ja-cob'' or ''Si-en-na''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1440','<p><strong>Content Description</strong></p><p>Recognise and name all upper and lower case letters (graphemes) and know the most common sound that each letter represents.</p><p><strong>Elaboration</strong></p>Recognise and name all upper and lower case letters (graphemes) and know the most common sound that each letter represents<p>Using familiar and common letters in handwritten and digital communications.</p><p>Identifying familiar and recurring letters and the use of upper and lower case in written texts in the classroom and the community, for example ''Tom went to the park.''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1438','<p><strong>Content Description</strong></p><p>Understand how to use knowledge of letters and sounds including onset and rime to spell words.</p><p><strong>Elaboration</strong></p>Understand how to use knowledge of letters and sounds including onset and rime to spell words<p>Recognising the most common sound made by each letter of the alphabet, including consonants and short vowel sounds, for example ''p-op''.</p><p>Breaking words into onset and rime, noticing words that share the same pattern, for example ''p-at'', ''b-at'' .</p><p>Breaking words into onset and rime to learn how to spell words that share the same pattern, for example ''p-at'', ''b-at'', ''t-all'' and ''f-all''.</p><p>Building word families using onset and rime, for example ''h-ot'', ''g-ot'', ''n-ot'', ''sh-ot''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1817','<p><strong>Content Description</strong></p><p>Know how to read and write some high-frequency words and other familiar words.</p><p><strong>Elaboration</strong></p>Know how to read and write some high-frequency words and other familiar words<p>Knowing how to write some high-frequency words recognised in shared texts and texts being read independently, for example ''and'', ''my'', ''is'', ''the'' and ''went''.</p><p>Knowing how to write students&rsquo; own names and those of other familiar people.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1818','<p><strong>Content Description</strong></p><p>Understand that words are units of meaning and can be made of more than one meaningful part.</p><p><strong>Elaboration</strong></p>Understand that words are units of meaning and can be made of more than one meaningful part<p>Learning that words are made up of meaningful parts, for example ''dogs'' has two meaningful parts ''dog'' and ''s'' meaning more than one.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1819','<p><strong>Content Description</strong></p><p>Segment sentences into individual words and orally blend and segment onset and rime in single syllable spoken words, and isolate, blend and manipulate phonemes in single syllable words.</p><p><strong>Elaboration</strong></p>Segment sentences into individual words and orally blend and segment onset and rime in single syllable spoken words, and isolate, blend and manipulate phonemes in single syllable words<p>Identifying and manipulating sounds (phonemes) in spoken words, for example ''c-a-n''.</p><p>Identifying onset and rime in one-syllable spoken words, for example ''d-og'' and ''b-ig''.</p><p>Blending phonemes to form one-syllable spoken words, for example ''s-u-n'' is orally expressed as ''sun'' and ''b-a-g'' is orally expressed as ''bag''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1820','<p><strong>Content Description</strong></p><p>Write consonant-vowel-consonant (CVC) words by representing some sounds with the appropriate letters, and blend sounds associated with letters when reading CVC words.</p><p><strong>Elaboration</strong></p>Write consonant-vowel-consonant (CVC) words by representing some sounds with the appropriate letters, and blend sounds associated with letters when reading CVC words<p>Listening to hear that children use letters/sounds (when necessary) to help them read CVC words and hear and record appropriate sounds associated with letters when writing CVC words, for example ''kat'' for ''cat''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELT1580','<p><strong>Content Description</strong></p><p>Retell familiar literary texts through performance, use of illustrations and images.</p><p><strong>Elaboration</strong></p>Retell familiar literary texts through performance, use of illustrations and images<p>Drawing, labelling and role playing representations of characters or events.</p><p>Reciting rhymes with actions.</p><p>Using digital technologies to retell events and recreate characters from favourite print and film texts.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELT1831','<p><strong>Content Description</strong></p><p>Innovate on familiar texts through play.</p><p><strong>Elaboration</strong></p>Innovate on familiar texts through play<p>Performing memorable actions or behaviours of favourite or humorous characters in texts.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELY1651','<p><strong>Content Description</strong></p><p>Create short texts to explore, record and report ideas and events using familiar words and beginning writing knowledge.</p><p><strong>Elaboration</strong></p>Create short texts to explore, record and report ideas and events using familiar words and beginning writing knowledge<p>Using image-making and beginning writing to represent characters and events in written, film and web-based texts.</p><p>Using speaking, writing and drawing to represent and communicate personal responses to ideas and events experienced through texts.</p><p>Creating short spoken, written and multimodal observations, recounts and descriptions, extending vocabulary and including some content-specific words in spoken and written texts.</p><p>Using beginning concepts about print, sound-letter and word knowledge and punctuation to create short texts.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELY1652','<p><strong>Content Description</strong></p><p>Participate in shared editing of students'' own texts for meaning, spelling, capital letters and full stops.</p><p><strong>Elaboration</strong></p>Participate in shared editing of students'' own texts for meaning, spelling, capital letters and full stops<p>Rereading collaboratively developed texts to check that they communicate what the authors intended.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELY1653','<p><strong>Content Description</strong></p><p>Produce some lower case and upper case letters using learned letter formations.</p><p><strong>Elaboration</strong></p>Produce some lower case and upper case letters using learned letter formations<p>Adopting correct posture and pencil grip.</p><p>Learning to produce simple handwriting movements.</p><p>Following clear demonstrations of how to construct each letter (for example where to start; which direction to write).</p><p>Learning to construct lower case letters and to combine these into words.</p><p>Learning to construct some upper case letters.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELY1654','<p><strong>Content Description</strong></p><p>Construct texts using software including word processing programs.</p><p><strong>Elaboration</strong></p>Construct texts using software including word processing programs<p>Using simple functions of keyboard and mouse including typing letters, scrolling, selecting icons and drop-down menu.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1447','<p><strong>Content Description</strong></p><p>Understand that the purposes texts serve shape their structure in predictable ways.</p><p><strong>Elaboration</strong></p>Understand that the purposes texts serve shape their structure in predictable ways<p>Discussing and comparing the purposes of familiar texts drawn from local contexts and interests.</p><p>Becoming familiar with the typical stages of types of text including recount and procedure.</p><p>Using different types of texts, for example procedures (including recipes) and discussing the text structure.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1448','<p><strong>Content Description</strong></p><p>Understand patterns of repetition and contrast in simple texts.</p><p><strong>Elaboration</strong></p>Understand patterns of repetition and contrast in simple texts<p>Identifying patterns of vocabulary items in texts (for example class/subclass patterns, part/whole patterns, compare/contrast patterns, cause-and-effect patterns, word associations/collocation).</p><p>Discussing different types of texts and identifying some characteristic features and elements (for example language patterns and repetition) in stories and poetry.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1449','<p><strong>Content Description</strong></p><p>Recognise that different types of punctuation, including full stops, question marks and exclamation marks, signal sentences that make statements, ask questions, express emotion or give commands.</p><p><strong>Elaboration</strong></p>Recognise that different types of punctuation, including full stops, question marks and exclamation marks, signal sentences that make statements, ask questions, express emotion or give commands<p>Using intonation and pauses in response to punctuation when reading.</p><p>Reading texts and identifying different sentence-level punctuation.</p><p>Writing different types of sentences, for example statements and questions, and discussing appropriate punctuation.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1450','<p><strong>Content Description</strong></p><p>Understand concepts about print and screen, including how different types of texts are organised using page numbering, tables of content, headings and titles, navigation buttons, bars and links.</p><p><strong>Elaboration</strong></p>Understand concepts about print and screen, including how different types of texts are organised using page numbering, tables of content, headings and titles, navigation buttons, bars and links<p>Learning about how books and digital texts are organised including page numbers, table of contents, headings, images with captions and the use of scrolling to access digital texts.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1451','<p><strong>Content Description</strong></p><p>Identify the parts of a simple sentence that represent &lsquo;What&rsquo;s happening?&rsquo;, &lsquo;What state is being described?&rsquo;, &lsquo;Who or what is involved?&rsquo; and the surrounding circumstances.</p><p><strong>Elaboration</strong></p>Identify the parts of a simple sentence that represent &lsquo;What&rsquo;s happening?&rsquo;, &lsquo;What state is being described?&rsquo;, &lsquo;Who or what is involved?&rsquo; and the surrounding circumstances<p>Knowing that, in terms of meaning, a basic clause represents: a happening or a state (verb), who or what is involved (noun group/phrase), and the surrounding circumstances (adverb group/phrase).</p><p>Understanding that a simple sentence expresses a single idea, represented grammatically by a single independent clause (for example ''A kangaroo is a mammal. A mammal suckles its young'').</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1452','<p><strong>Content Description</strong></p><p>Explore differences in words that represent people, places and things (nouns, including pronouns), happenings and states (verbs), qualities (adjectives) and details such as when, where and how (adverbs).</p><p><strong>Elaboration</strong></p>Explore differences in words that represent people, places and things (nouns, including pronouns), happenings and states (verbs), qualities (adjectives) and details such as when, where and how (adverbs)<p>Talking about effective words that describe a place, person or event.</p><p>Learning how a sentence can be made more vivid by adding adjectives, adverbs and unusual verbs.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1454','<p><strong>Content Description</strong></p><p>Understand the use of vocabulary in everyday contexts as well as a growing number of school contexts, including appropriate use of formal and informal terms of address in different contexts.</p><p><strong>Elaboration</strong></p>Understand the use of vocabulary in everyday contexts as well as a growing number of school contexts, including appropriate use of formal and informal terms of address in different contexts<p>Learning forms of address for visitors and how to use language appropriately to ask directions and for information, for example on excursions.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1457','<p><strong>Content Description</strong></p><p>Manipulate phonemes in spoken words by addition, deletion and substitution of initial, medial and final phonemes to generate new words.</p><p><strong>Elaboration</strong></p>Manipulate phonemes in spoken words by addition, deletion and substitution of initial, medial and final phonemes to generate new words<p>Recognising words that start with a given sound, or end with a given sound, or have a given medial sound, for example ''b-e-d'' and ''l-e-g''.</p><p>Replacing initial sounds in spoken words, for example replace the ''m'' in ''mat'' with ''c'' to form a new word ''cat''.</p><p>Deleting initial onset sound in spoken words, for example delete the ''f'' from ''farm'' to make a new word ''arm''.</p><p>Substituting medial sounds in spoken words to make new words, for example ''pin'', ''pen'', ''pan''.</p><p>Substituting final sounds in spoken words, for example substitute the ''t'' in ''pet'' with ''g'' to form a new word ''peg''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1458','<p><strong>Content Description</strong></p><p>Use short vowels, common long vowels, consonant digraphs and consonant blends when writing, and blend these to read single syllable words.</p><p><strong>Elaboration</strong></p>Use short vowels, common long vowels, consonant digraphs and consonant blends when writing, and blend these to read single syllable words<p>Using knowledge of letters and sounds to write words with short vowels, for example ''man'', and common long vowel sounds, for example ''cake''.</p><p>Using knowledge of letters sounds to write single-syllable words with consonant digraphs and consonant blends, for example ''wish'' and ''rest'' .</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1459','<p><strong>Content Description</strong></p><p>Understand that a letter can represent more than one sound and that a syllable must contain a vowel sound.</p><p><strong>Elaboration</strong></p>Understand that a letter can represent more than one sound and that a syllable must contain a vowel sound<p>Recognising that letters can have more than one sound, for example the letter ''u'' in ''cut'', ''put'', ''use'' and the letter ''a'' in ''cat'', ''father'', ''any''.</p><p>Recognising sounds that can be produced by different letters, for example the ''s'' sound in ''sat'' and ''cent''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1778','<p><strong>Content Description</strong></p><p>Understand how to spell one and two syllable words with common letter patterns.</p><p><strong>Elaboration</strong></p>Understand how to spell one and two syllable words with common letter patterns<p>Writing one-syllable words containing known blends, for example ''bl'' and ''st''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1455','<p><strong>Content Description</strong></p><p>Recognise and know how to use simple grammatical morphemes to create word families.</p><p><strong>Elaboration</strong></p>Recognise and know how to use simple grammatical morphemes to create word families<p>Building word families from common morphemes, for example ''play'', ''plays'', ''playing'', ''played'', ''playground''.</p><p>Using morphemes to read words, for example by recognising the base word in words such as ''walk-ed''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1821','<p><strong>Content Description</strong></p><p>Use visual memory to read and write high-frequency words&nbsp;.</p><p><strong>Elaboration</strong></p>Use visual memory to read and write high-frequency words&nbsp;<p>Learning an increasing number of high-frequency words recognised in shared texts and texts being read independently, for example ''one'', ''have'', ''them'' and ''about''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1822','<p><strong>Content Description</strong></p><p>Segment consonant blends or clusters into separate phonemes at the beginnings and ends of one syllable words.</p><p><strong>Elaboration</strong></p>Segment consonant blends or clusters into separate phonemes at the beginnings and ends of one syllable words<p>Saying sounds in order for a given spoken word, for example ''s-p-oo-n'' and ''f-i-s-t''.</p><p>Segmenting blends at the beginning and end of given words, for example ''b-l-ue'' and ''d-u-s-t''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELT1586','<p><strong>Content Description</strong></p><p>Recreate texts imaginatively using drawing, writing, performance and digital forms of communication.</p><p><strong>Elaboration</strong></p>Recreate texts imaginatively using drawing, writing, performance and digital forms of communication<p>Creating visual representations of literary texts from Aboriginal, Torres Strait Islander or Asian cultures.</p><p>Writing character descriptions drawn from illustrations in stories.</p><p>Retelling key events in stories using oral language, arts, digital technologies and performance media.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELT1832','<p><strong>Content Description</strong></p><p>Innovate on familiar texts by using similar characters, repetitive patterns or vocabulary.</p><p><strong>Elaboration</strong></p>Innovate on familiar texts by using similar characters, repetitive patterns or vocabulary<p>Imitating a characteristic piece of speech or dialogue, or the attitude or expression of favourite or humorous characters in texts.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELY1661','<p><strong>Content Description</strong></p><p>Create short imaginative and informative texts that show emerging use of appropriate text structure, sentence-level grammar, word choice, spelling, punctuation and appropriate multimodal elements, for example illustrations and diagrams.</p><p><strong>Elaboration</strong></p>Create short imaginative and informative texts that show emerging use of appropriate text structure, sentence-level grammar, word choice, spelling, punctuation and appropriate multimodal elements, for example illustrations and diagrams<p>Referring to learned knowledge of text structure and grammar when creating a new text.</p><p>Applying new vocabulary appropriately in creating text.</p><p>Learning how to plan spoken and written communications so that listeners and readers might follow the sequence of ideas or events.</p><p>Beginning to consider audience in designing a communication involving visual components, selecting images for maximum impact.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELY1662','<p><strong>Content Description</strong></p><p>Re-read student''s own texts and discuss possible changes to improve meaning, spelling and punctuation.</p><p><strong>Elaboration</strong></p>Re-read student''s own texts and discuss possible changes to improve meaning, spelling and punctuation<p>Adding or deleting words on page or screen to improve meaning, for example adding an adjective to a noun.</p><p>Reading the students'' own work aloud to listen for grammatical correctness: checking use of capital letters, full stops, question marks and exclamation marks.</p><p>Checking for inclusion of capital letters and full stops.</p><p>Identifying words which might not be spelt correctly.</p><p>Beginning to use dictionaries and classroom charts to check and correct spelling of less familiar words.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELY1663','<p><strong>Content Description</strong></p><p>Write using unjoined lower case and upper case letters.</p><p><strong>Elaboration</strong></p>Write using unjoined lower case and upper case letters<p>Using correct posture and pencil grip.</p><p>Learning how each letter is constructed including where to start and the direction to follow.</p><p>Writing words legibly using unjoined print script of consistent size.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELY1664','<p><strong>Content Description</strong></p><p>Construct texts that incorporate supporting images using software including word processing programs.</p><p><strong>Elaboration</strong></p>Construct texts that incorporate supporting images using software including word processing programs<p>Creating digital images and composing a story or information sequence on screen using images and captions.</p><p>Adding images to digital written communications such as emails with pictures of self, classmates or location.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1463','<p><strong>Content Description</strong></p><p>Understand that different types of texts have identifiable text structures and language features that help the text serve its purpose.</p><p><strong>Elaboration</strong></p>Understand that different types of texts have identifiable text structures and language features that help the text serve its purpose<p>Identifying the topic and type of a text through its visual presentation, for example cover design, packaging, title/subtitle and images.</p><p>Becoming familiar with the typical stages of text types, for example simple narratives, instructions and expositions.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1464','<p><strong>Content Description</strong></p><p>Understand how texts are made cohesive through language features, including word associations, synonyms, and antonyms.</p><p><strong>Elaboration</strong></p>Understand how texts are made cohesive through language features, including word associations, synonyms, and antonyms<p>Exploring how texts develop their themes and ideas, building information through connecting similar and contrasting dissimilar things.</p><p>Mapping examples of word associations in texts, for example words that refer to the main character.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1465','<p><strong>Content Description</strong></p><p>Recognise that capital letters signal proper nouns and commas are used to separate items in lists.</p><p><strong>Elaboration</strong></p>Recognise that capital letters signal proper nouns and commas are used to separate items in lists<p>Talking about how a comma can be used to separate two or more elements in a list, for example ''At the museum they saw a tiger, a dinosaur and two snakes''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1466','<p><strong>Content Description</strong></p><p>Know some features of text organisation including page and screen layouts, alphabetical order, and different types of diagrams, for example timelines.</p><p><strong>Elaboration</strong></p>Know some features of text organisation including page and screen layouts, alphabetical order, and different types of diagrams, for example timelines<p>Recognising how chapters and table of contents, alphabetical order of index and glossary operate to guide access to information.</p><p>Learning about features of screen texts including menu buttons, drop down menus, links and live connections.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1467','<p><strong>Content Description</strong></p><p>Understand that simple connections can be made between ideas by using a compound sentence with two or more clauses usually linked by a coordinating conjunction.</p><p><strong>Elaboration</strong></p>Understand that simple connections can be made between ideas by using a compound sentence with two or more clauses usually linked by a coordinating conjunction<p>Learning how to express ideas using compound sentences.</p><p>Learning how to join simple sentences with conjunctions, for example ''and'', ''but'' or ''so'', to construct compound sentences.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1468','<p><strong>Content Description</strong></p><p>Understand that nouns represent people, places, concrete objects and abstract concepts; that there are three types of nouns: common, proper and pronouns; and that noun groups/phrases can be expanded using articles and adjectives.</p><p><strong>Elaboration</strong></p>Understand that nouns represent people, places, concrete objects and abstract concepts; that there are three types of nouns: common, proper and pronouns; and that noun groups/phrases can be expanded using articles and adjectives<p>Exploring texts and identifying nouns that refer to characters, elements of the setting, and ideas.</p><p>Exploring illustrations and noun groups/phrases in picture books to identify how the participants have been represented by an illustrator.</p><p>Exploring names of people and places and how to write them using capital letters.</p><p>Building extended noun groups/phrases that provide a clear description of an item.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1469','<p><strong>Content Description</strong></p><p>Identify visual representations of characters'' actions, reactions, speech and thought processes in  narratives, and consider how these images  add to or contradict or multiply the meaning of accompanying words.</p><p><strong>Elaboration</strong></p>Identify visual representations of characters'' actions, reactions, speech and thought processes in  narratives, and consider how these images  add to or contradict or multiply the meaning of accompanying words<p>Comparing two versions of the same story, for example ''Jack and the Beanstalk'', identifying how a character''s actions and reactions are depicted differently by different illustrators.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1470','<p><strong>Content Description</strong></p><p>Understand the use of vocabulary about familiar and new topics and experiment with and begin to make conscious choices of vocabulary to suit audience and purpose.</p><p><strong>Elaboration</strong></p>Understand the use of vocabulary about familiar and new topics and experiment with and begin to make conscious choices of vocabulary to suit audience and purpose<p>Interpreting new terminology drawing on prior knowledge, analogies and connections with known words.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1474','<p><strong>Content Description</strong></p><p>Orally manipulate more complex sounds in spoken words through knowledge of blending and segmenting sounds, phoneme deletion and substitution in combination with use of letters in reading and writing.</p><p><strong>Elaboration</strong></p>Orally manipulate more complex sounds in spoken words through knowledge of blending and segmenting sounds, phoneme deletion and substitution in combination with use of letters in reading and writing<p>Blending and segmenting sounds in words, for example ''b-r-o-th-er'' or ''c-l-ou-d-y''.</p><p>Deleting and substituting sounds in spoken words to form new words, for example delete the ''scr'' in ''scratch'', and then form new words ''catch'', ''batch'' and ''hatch''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1471','<p><strong>Content Description</strong></p><p>Understand how to use knowledge of digraphs, long vowels, blends and silent letters to spell one and two syllable words including some compound words.</p><p><strong>Elaboration</strong></p>Understand how to use knowledge of digraphs, long vowels, blends and silent letters to spell one and two syllable words including some compound words<p>Using knowledge of known words to spell unknown words, for example using the  word ''thumb'' to spell the word ''crumb''.</p><p>Exploring compound words by discussing the meaningful parts, for example the spelling and meaning of ''homemade'' is informed by two smaller words ''home'' and ''made''.</p><p>Drawing on knowledge of letter-sound relationships, for example breaking a word into syllables, then recording the sounds heard and thinking about the letter patterns that represent the sounds.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1472','<p><strong>Content Description</strong></p><p>Build morphemic word families using knowledge of prefixes and suffixes.</p><p><strong>Elaboration</strong></p>Build morphemic word families using knowledge of prefixes and suffixes<p>Discussing how a prefix or suffix affects meaning, for example in the word ''paint-er'' the suffix ''er'' means ''one who'', so a painter is ''one who paints''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1823','<p><strong>Content Description</strong></p><p>Use knowledge of letter patterns and morphemes to read and write high-frequency words and words whose spelling is not predictable from their sounds.</p><p><strong>Elaboration</strong></p>Use knowledge of letter patterns and morphemes to read and write high-frequency words and words whose spelling is not predictable from their sounds<p>Using known words in writing and spelling unknown words using morphemic knowledge of letter patterns and morphemes, for example the words ''sometimes'', ''something'' and ''anything''.</p><p>Using known words in writing and spelling unknown words using morphemic knowledge of letter patterns and morphemes, for example the words ''one'', ''once'', ''only'' and ''lone''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1824','<p><strong>Content Description</strong></p><p>Use most letter-sound matches including vowel digraphs, less common long vowel patterns, letter clusters and silent letters when reading and writing words of one or more syllable.</p><p><strong>Elaboration</strong></p>Use most letter-sound matches including vowel digraphs, less common long vowel patterns, letter clusters and silent letters when reading and writing words of one or more syllable<p>Recognising when some letters are silent, for example ''knife'' and ''thumb''.</p><p>Providing the sound for less common letter-sound matches, for example ''ight'' and using them in writing.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1825','<p><strong>Content Description</strong></p><p>Understand that a sound can be represented by various letter combinations.</p><p><strong>Elaboration</strong></p>Understand that a sound can be represented by various letter combinations<p>Recognising sounds that can be produced by different letters, for example the long ''a'' sound in ''wait'', ''stay'', ''able'' and ''make''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELT1593','<p><strong>Content Description</strong></p><p>Create events and characters using different media that develop key events and characters from literary texts.</p><p><strong>Elaboration</strong></p>Create events and characters using different media that develop key events and characters from literary texts<p>Creating imaginative reconstructions of stories and poetry using a range of print and digital media.</p><p>Telling known stories from a different point of view.</p><p>Orally, in writing or using digital media, constructing a sequel to a known story.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELT1833','<p><strong>Content Description</strong></p><p>Innovate on familiar texts by experimenting with character, setting or plot.</p><p><strong>Elaboration</strong></p>Innovate on familiar texts by experimenting with character, setting or plot<p>Inventing some speech, dialogue or behaviour of favourite or humorous characters through imagining an alternative event or outcome in the original text.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELY1671','<p><strong>Content Description</strong></p><p>Create short imaginative, informative and persuasive texts using growing knowledge of text structures and language features for familiar and some less familiar audiences, selecting print and multimodal elements appropriate to the audience and purpose.</p><p><strong>Elaboration</strong></p>Create short imaginative, informative and persuasive texts using growing knowledge of text structures and language features for familiar and some less familiar audiences, selecting print and multimodal elements appropriate to the audience and purpose<p>Learning how to plan spoken and written communications so that listeners and readers might follow the sequence of ideas or events.</p><p>Sequencing content according to text structure.</p><p>Using appropriate simple and compound sentence to express and combine ideas.</p><p>Using vocabulary, including technical vocabulary, appropriate to text type and purpose.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELY1672','<p><strong>Content Description</strong></p><p>Re-read and edit text for spelling, sentence-boundary punctuation and text structure.</p><p><strong>Elaboration</strong></p>Re-read and edit text for spelling, sentence-boundary punctuation and text structure<p>Reading their work and adding, deleting or changing words, prepositional phrases or sentences to improve meaning, for example replacing an everyday noun with a technical one in an informative text.</p><p>Checking spelling using a dictionary.</p><p>Checking for inclusion of relevant punctuation including capital letters to signal names, as well as sentence beginnings, full stops, question marks and exclamation marks.</p><p>Making significant changes to their texts using a word processing program ( for example add, delete or move sentences).</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELY1673','<p><strong>Content Description</strong></p><p>Write legibly and with growing fluency using unjoined upper case and lower case letters.</p><p><strong>Elaboration</strong></p>Write legibly and with growing fluency using unjoined upper case and lower case letters<p>Using correct pencil grip and posture.</p><p>Writing sentences legibly and fluently using unjoined print script of consistent size.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELY1674','<p><strong>Content Description</strong></p><p>Construct texts featuring print, visual and audio elements using software, including word processing programs.</p><p><strong>Elaboration</strong></p>Construct texts featuring print, visual and audio elements using software, including word processing programs<p>Experimenting with and combining elements of software programs to create texts.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1479','<p><strong>Content Description</strong></p><p>Understand that paragraphs are a key organisational feature of written texts.</p><p><strong>Elaboration</strong></p>Understand that paragraphs are a key organisational feature of written texts<p>Noticing how longer texts are organised into paragraphs, each beginning with a topic sentence/paragraph opener which predicts how the paragraph will develop and is then elaborated in various ways.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1480','<p><strong>Content Description</strong></p><p>Know that word contractions are a feature of informal language and that apostrophes of contraction are used to signal missing letters.</p><p><strong>Elaboration</strong></p>Know that word contractions are a feature of informal language and that apostrophes of contraction are used to signal missing letters<p>Recognising both grammatically accurate and inaccurate usage of the apostrophe in everyday texts such as signs in the community and newspaper advertisements.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1790','<p><strong>Content Description</strong></p><p>Identify the features of online texts that enhance navigation.</p><p><strong>Elaboration</strong></p>Identify the features of online texts that enhance navigation<p>Becoming familiar with the typical features of online texts, for example navigation bars and buttons, hyperlinks and sitemaps.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1481','<p><strong>Content Description</strong></p><p>Understand that a clause is a unit of grammar usually containing a subject and a verb and that these need to be in agreement.</p><p><strong>Elaboration</strong></p>Understand that a clause is a unit of grammar usually containing a subject and a verb and that these need to be in agreement<p>Knowing that a clause is basically a group of words that contains a verb.</p><p>Knowing that, in terms of meaning, a basic clause represents: what is happening; what state is being described; who or what is involved; and the surrounding circumstances.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1482','<p><strong>Content Description</strong></p><p>Understand that verbs represent different processes, for example&nbsp;doing, thinking, saying, and relating and that these processes are anchored in time through tense.</p><p><strong>Elaboration</strong></p>Understand that verbs represent different processes, for example&nbsp;doing, thinking, saying, and relating and that these processes are anchored in time through tense<p>Identifying different types of verbs and the way they add meaning to a sentence.</p><p>Exploring&nbsp;''doing'' and ''saying'' verbs in narrative texts to show how they give information about what characters do and say.</p><p>Exploring the use of sensing verbs and how they allow readers to know what characters think and feel.</p><p>Exploring the use of relating verbs in constructing definitions and descriptions.</p><p>Learning how time is represented through the tense of a verb, for example ''She arrived&rsquo;, &lsquo;She is arriving&rsquo; and adverbials of time, for example &lsquo;She arrived yesterday&rsquo;, &lsquo;She is arriving in the morning&rsquo;.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1483','<p><strong>Content Description</strong></p><p>Identify the effect on audiences of techniques, for example shot size, vertical camera angle and layout in picture books, advertisements and film segments.</p><p><strong>Elaboration</strong></p>Identify the effect on audiences of techniques, for example shot size, vertical camera angle and layout in picture books, advertisements and film segments<p>Noting how the relationship between characters can be depicted in illustrations through: the positioning of the characters (for example facing each other or facing away from each other); the distance between them; the relative size; one character looking up (or down) at the other (power relationships); facial expressions and body gesture.</p><p>Observing how images construct a relationship with the viewer through such strategies as: direct gaze into the viewer''s eyes, inviting involvement and how close ups are more engaging than distanced images, which can suggest alienation or loneliness.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1484','<p><strong>Content Description</strong></p><p>Learn extended and technical vocabulary and ways of expressing opinion including modal verbs and adverbs.</p><p><strong>Elaboration</strong></p>Learn extended and technical vocabulary and ways of expressing opinion including modal verbs and adverbs<p>Exploring examples of language which demonstrate a range of feelings and positions, and building a vocabulary to express judgments about characters or events, acknowledging that language and judgments might differ depending on the cultural context.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1485','<p><strong>Content Description</strong></p><p>Understand how to use letter-sound relationships and less common letter patterns to spell words.</p><p><strong>Elaboration</strong></p>Understand how to use letter-sound relationships and less common letter patterns to spell words<p>Using sound and visual spelling strategies to explore less common letter patterns after a short vowel, for example words that end in ''dge'' such as ''badge'', ''edge'', ''fridge'', ''dodge'' and ''smudge''.</p><p>Using sound and visual spelling strategies to spell words with three-letter blends, for example ''str-ip''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1486','<p><strong>Content Description</strong></p><p>Recognise and know how to write most high frequency words including some homophones.</p><p><strong>Elaboration</strong></p>Recognise and know how to write most high frequency words including some homophones<p>Drawing on meaning and context to spell single-syllable homophones, for example ''break'' or ''brake'' and ''ate'' or ''eight''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1826','<p><strong>Content Description</strong></p><p>Understand how to apply knowledge of letter-sound relationships, syllables, and blending and segmenting to fluently read and write multisyllabic words with more complex letter patterns.</p><p><strong>Elaboration</strong></p>Understand how to apply knowledge of letter-sound relationships, syllables, and blending and segmenting to fluently read and write multisyllabic words with more complex letter patterns<p>Reading and writing more complex words with consonant digraphs and consonant blends, for example ''shrinking'', ''against'' and ''rocket''.</p><p>Reading and writing consonant digraphs representing different sounds, for example ''machine'', ''change'' and ''school''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1827','<p><strong>Content Description</strong></p><p>Know how to use common prefixes and suffixes, and generalisations for adding a suffix to a base word.</p><p><strong>Elaboration</strong></p>Know how to use common prefixes and suffixes, and generalisations for adding a suffix to a base word<p>Exploring generalisations for adding a suffix to a base word to form a plural or past tense, for example to make a word plural when it ends in ''ss'', ''sh'', ''ch'' or ''z'', add ''es''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELT1601','<p><strong>Content Description</strong></p><p>Create imaginative texts based on characters, settings and events from students'' own and other cultures using visual features, for example perspective, distance and angle.</p><p><strong>Elaboration</strong></p>Create imaginative texts based on characters, settings and events from students'' own and other cultures using visual features, for example perspective, distance and angle<p>Drawing on literary texts read, viewed and listened to for inspiration and ideas, appropriating language to create mood and characterisation.</p><p>Innovating on texts read, viewed and listened to by changing the point of view, revising an ending or creating a sequel.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELT1791','<p><strong>Content Description</strong></p><p>Create texts that adapt language features and patterns encountered in literary texts, for example characterisation, rhyme, rhythm, mood, music, sound effects and dialogue.</p><p><strong>Elaboration</strong></p>Create texts that adapt language features and patterns encountered in literary texts, for example characterisation, rhyme, rhythm, mood, music, sound effects and dialogue<p>Creating visual and multimodal texts based on Aboriginal and Torres Strait Islander or Asian literature, applying one or more visual elements to convey the intent of the original text.</p><p>Creating multimodal texts that combine visual images, sound effects, music and voice overs to convey settings and events in a fantasy world.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELY1682','<p><strong>Content Description</strong></p><p>Plan, draft and publish imaginative, informative and persuasive texts demonstrating increasing control over text structures and language features and selecting print,and multimodal elements appropriate to the audience and purpose.</p><p><strong>Elaboration</strong></p>Plan, draft and publish imaginative, informative and persuasive texts demonstrating increasing control over text structures and language features and selecting print,and multimodal elements appropriate to the audience and purpose<p>Using print and digital resources to gather information about a topic.</p><p>Selecting appropriate text structure for a writing purpose and sequencing content for clarity and audience impact.</p><p>Using appropriate simple, compound and complex sentences to express and combine ideas.</p><p>Using vocabulary, including technical vocabulary, relevant to the text type and purpose, and appropriate sentence structures to express and combine ideas.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELY1683','<p><strong>Content Description</strong></p><p>Re-read and edit texts for meaning, appropriate structure, grammatical choices and punctuation.</p><p><strong>Elaboration</strong></p>Re-read and edit texts for meaning, appropriate structure, grammatical choices and punctuation<p>Using glossaries, print and digital dictionaries and spell check to edit spelling, realising that spell check accuracy depends on understanding the word function, for example there/their; rain/reign.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELY1684','<p><strong>Content Description</strong></p><p>Write using joined letters that are clearly formed and consistent in size.</p><p><strong>Elaboration</strong></p>Write using joined letters that are clearly formed and consistent in size<p>Practising how to join letters to construct a fluent handwriting style.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELY1685','<p><strong>Content Description</strong></p><p>Use software including word processing programs with growing speed and efficiency to construct and edit texts featuring visual, print and audio elements.</p><p><strong>Elaboration</strong></p>Use software including word processing programs with growing speed and efficiency to construct and edit texts featuring visual, print and audio elements<p>Using features of relevant technologies to plan, sequence, compose and edit multimodal texts.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1490','<p><strong>Content Description</strong></p><p>Understand how texts vary in complexity and technicality depending on the approach to the topic, the purpose and the intended audience.</p><p><strong>Elaboration</strong></p>Understand how texts vary in complexity and technicality depending on the approach to the topic, the purpose and the intended audience<p>Becoming familiar with the typical stages and language features of such text types as: simple narrative, procedure, simple persuasion texts and information reports.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1491','<p><strong>Content Description</strong></p><p>Understand how texts are made cohesive through the use of linking devices including pronoun reference and text connectives.</p><p><strong>Elaboration</strong></p>Understand how texts are made cohesive through the use of linking devices including pronoun reference and text connectives<p>Knowing how authors construct texts that are cohesive and coherent through the use of: pronouns that link to something previously mentioned; determiners (for example &lsquo;this&rsquo;, &lsquo;that&rsquo;, &lsquo;these&rsquo;, &lsquo;those&rsquo;, &lsquo;the&rsquo;,); text connectives that create links between sentences (for example &lsquo;however&rsquo;, &lsquo;therefore&rsquo;, &lsquo;nevertheless&rsquo;, &lsquo;in addition&rsquo;, &lsquo;by contrast&rsquo;, &lsquo;in summary&rsquo;).</p><p>Identifying how participants are tracked through a text by, for example, using pronouns to refer back to noun groups/phrases.</p><p>Describing how text connectives link sections of a text providing sequences through time, for example &lsquo;firstly&rsquo;, &lsquo;then&rsquo;, &lsquo;next&rsquo;, and &lsquo;finally&rsquo;.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1492','<p><strong>Content Description</strong></p><p>Recognise how quotation marks are used in texts to signal dialogue, titles and quoted (direct) speech.</p><p><strong>Elaboration</strong></p>Recognise how quotation marks are used in texts to signal dialogue, titles and quoted (direct) speech<p>Exploring texts to identify the use of quotation marks.</p><p>Experimenting with the use of quotation marks in students'' own writing.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1793','<p><strong>Content Description</strong></p><p>Identify features of online texts that enhance readability including text, navigation, links, graphics and layout.</p><p><strong>Elaboration</strong></p>Identify features of online texts that enhance readability including text, navigation, links, graphics and layout<p>Participating in online searches for information using navigation tools and discussing similarities and differences between print and digital information.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1493','<p><strong>Content Description</strong></p><p>Understand that the meaning of sentences can be enriched through the use of noun groups/phrases and verb groups/phrases and prepositional phrases.</p><p><strong>Elaboration</strong></p>Understand that the meaning of sentences can be enriched through the use of noun groups/phrases and verb groups/phrases and prepositional phrases<p>Creating richer, more specific descriptions through the use of noun groups/phrases (for example, in narrative texts, ''their very old Siamese cat''; in reports, &#39;its extremely high mountain ranges&#39;).</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1495','<p><strong>Content Description</strong></p><p>Understand how adverb groups/phrases and prepositional phrases work in different ways to provide circumstantial details about an activity.</p><p><strong>Elaboration</strong></p>Understand how adverb groups/phrases and prepositional phrases work in different ways to provide circumstantial details about an activity<p>Investigating in texts how adverb group/phrases and prepositional phrases can provide details of the circumstances surrounding a happening or state (for example, ''At midnight (time) he rose slowly (manner) from the chair (place) and went upstairs (place)''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1496','<p><strong>Content Description</strong></p><p>Explore the effect of choices when framing an image, placement of elements in the image, and salience on composition of still and moving images in a range of types of texts.</p><p><strong>Elaboration</strong></p>Explore the effect of choices when framing an image, placement of elements in the image, and salience on composition of still and moving images in a range of types of texts<p>Examining visual and multimodal texts, building a vocabulary to describe visual elements and techniques such as framing, composition and visual point of view and beginning to understand how these choices impact on viewer response.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1498','<p><strong>Content Description</strong></p><p>Incorporate new vocabulary from a range of sources into students'' own texts including vocabulary encountered in research.</p><p><strong>Elaboration</strong></p>Incorporate new vocabulary from a range of sources into students'' own texts including vocabulary encountered in research<p>Building etymological knowledge about word origins (for example ''thermometer'') and building vocabulary from research about technical and subject specific topics.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1779','<p><strong>Content Description</strong></p><p>Understand how to use knowledge of letter patterns including double letters, spelling generalisations, morphemic word families, common prefixes and suffixes and word origins to spell more complex words.</p><p><strong>Elaboration</strong></p>Understand how to use knowledge of letter patterns including double letters, spelling generalisations, morphemic word families, common prefixes and suffixes and word origins to spell more complex words<p>Applying generalisations for adding affixes, for example ''hope'' and ''hoping'', ''begin'' and ''beginning'', ''country'' and ''countries''.</p><p>Building morphemic word families and exploring word origins, for example the prefix ''nat'' means source, birth or tribe in ''nature'', ''natural'' and ''native''.</p><p>Building morphemic word families and exploring word origins, for example ''tricycle'', ''triangle'' and ''triple''.</p><p>Using knowledge of common prefixes and suffixes to spell words and explore their meaning, for example ''friendly'', ''calmly'' and ''cleverly'' and ''misfortune''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1780','<p><strong>Content Description</strong></p><p>Read and write a large core of high frequency words including homophones and know how to use context to identify correct spelling.</p><p><strong>Elaboration</strong></p>Read and write a large core of high frequency words including homophones and know how to use context to identify correct spelling<p>Using meaning and context to determine the spelling of homophones, for example ''there'' and ''their''; ''no'' and ''know''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1828','<p><strong>Content Description</strong></p><p>Understand how to use phonic knowledge to read and write multisyllabic words with more complex letter combinations, including a variety of vowel sounds and known prefixes and suffixes.</p><p><strong>Elaboration</strong></p>Understand how to use phonic knowledge to read and write multisyllabic words with more complex letter combinations, including a variety of vowel sounds and known prefixes and suffixes<p>Using phonic generalisations to read and write multisyllabic words with more complex letter combinations, for example ''straightaway'' and ''thoughtful''.</p><p>Recognising unstressed vowels in multisyllabic words and how these vowel sounds are written, for example ''builder'' and ''animal''.</p><p>Using knowledge of sounds and visual patterns to read and write more complex letter combinations that have multiple representations in writing, for example ''boy'' and ''boil'', ''howl'' and ''foul'', ''taught ''and ''saw''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELT1607','<p><strong>Content Description</strong></p><p>Create literary texts that explore students'' own experiences and imagining.</p><p><strong>Elaboration</strong></p>Create literary texts that explore students'' own experiences and imagining<p>Drawing upon literary texts students have encountered and experimenting with changing particular aspects, for example the time or place of the setting, adding characters or changing their personalities, or offering an alternative point of view on key ideas.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELT1794','<p><strong>Content Description</strong></p><p>Create literary texts by developing storylines, characters and settings.</p><p><strong>Elaboration</strong></p>Create literary texts by developing storylines, characters and settings<p>Collaboratively plan, compose, sequence and prepare a literary text along a familiar storyline, using film, sound and images to convey setting, characters and points of drama in the plot.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELY1694','<p><strong>Content Description</strong></p><p>Plan, draft and publish imaginative, informative and persuasive texts containing key information and supporting details for a widening range of audiences, demonstrating increasing control over text structures and language features.</p><p><strong>Elaboration</strong></p>Plan, draft and publish imaginative, informative and persuasive texts containing key information and supporting details for a widening range of audiences, demonstrating increasing control over text structures and language features<p>Using research from print and digital resources to gather ideas, integrating information from a range of sources; selecting text structure and planning how to group ideas into paragraphs to sequence content, and choosing vocabulary to suit topic and communication purpose.</p><p>Using appropriate simple, compound and complex sentences to express and combine ideas.</p><p>Using grammatical features including different types of verb groups/phrases, noun groups/phrases, adverb groups/phrases and prepositional phrases for effective descriptions as related to purpose and context (for example, development of a character&rsquo;s actions or a description in a report).</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELY1695','<p><strong>Content Description</strong></p><p>Re-read and edit for meaning by adding, deleting or moving words or word groups to improve content and structure.</p><p><strong>Elaboration</strong></p>Re-read and edit for meaning by adding, deleting or moving words or word groups to improve content and structure<p>Revising written texts: editing for grammatical and spelling accuracy and clarity of the text, to improve the connection between ideas and the overall flow of the piece.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELY1696','<p><strong>Content Description</strong></p><p>Write using clearly-formed joined letters, and develop increased fluency and automaticity.</p><p><strong>Elaboration</strong></p>Write using clearly-formed joined letters, and develop increased fluency and automaticity<p>Using handwriting fluency with speed for a wide range of tasks.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELY1697','<p><strong>Content Description</strong></p><p>Use a range of software including word processing programs to construct, edit and publish written text, and select, edit and place visual, print and audio elements.</p><p><strong>Elaboration</strong></p>Use a range of software including word processing programs to construct, edit and publish written text, and select, edit and place visual, print and audio elements<p>Identifying and selecting appropriate software programs for constructing text.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1505','<p><strong>Content Description</strong></p><p>Understand that the starting point of a sentence gives prominence to the message in the text and allows for prediction of how the text will unfold.</p><p><strong>Elaboration</strong></p>Understand that the starting point of a sentence gives prominence to the message in the text and allows for prediction of how the text will unfold<p>Observing how writers use the beginning of a sentence to signal to the reader how the text is developing (for example ''Snakes are reptiles. They have scales and no legs. Many snakes are poisonous. However, in Australia they are protected'').</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1506','<p><strong>Content Description</strong></p><p>Understand how the grammatical category of possessives is signalled through apostrophes and how to use apostrophes with common and proper nouns.</p><p><strong>Elaboration</strong></p>Understand how the grammatical category of possessives is signalled through apostrophes and how to use apostrophes with common and proper nouns<p>Learning that in Standard Australian English regular plural nouns ending in &lsquo;s&rsquo; form the possessive by adding just the apostrophe, for example &lsquo;my parents'' car&rsquo;.</p><p>Learning that in Standard Australian English for proper nouns the regular possessive form is always possible but a variant form without the second &lsquo;s&rsquo; is sometimes found, for example &lsquo;James&rsquo;s house&rsquo; or &lsquo;James&rsquo; house&rsquo;.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1507','<p><strong>Content Description</strong></p><p>Understand the difference between main and subordinate clauses and that a complex sentence involves at least one subordinate clause.</p><p><strong>Elaboration</strong></p>Understand the difference between main and subordinate clauses and that a complex sentence involves at least one subordinate clause<p>Knowing that complex sentences make connections between ideas, such as: to provide a reason, for example ''He jumped up because the bell rang.''; to state a purpose, for example ''She raced home to confront her brother.''; to express a condition, for example ''It will break if you push it.''; to make a concession, for example ''She went to work even though she was not feeling well.''; to link two ideas in terms of various time relations, for example ''Nero fiddled while Rome burned.''.</p><p>Knowing that a complex sentence typically consists of a main clause and a subordinate clause.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1508','<p><strong>Content Description</strong></p><p>Understand how noun groups/phrases and adjective groups/phrases can be expanded in a variety of ways to provide a fuller description of the person, place, thing or idea.</p><p><strong>Elaboration</strong></p>Understand how noun groups/phrases and adjective groups/phrases can be expanded in a variety of ways to provide a fuller description of the person, place, thing or idea<p>Learning how to expand a description by combining a related set of nouns and adjectives - ''Two old brown cattle dogs sat on the ruined front veranda of the deserted house''.</p><p>Observing how descriptive details can be built up around a noun or an adjective, forming a group/phrase (for example, ''this very smelly cleaning cloth in the sink'' is a noun group/phrase and ''as pretty as the flowers in May'' is an adjective group/phrase).</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1511','<p><strong>Content Description</strong></p><p>Explain sequences of images in print texts and compare these to the ways hyperlinked digital texts are organised, explaining their effect on viewers'' interpretations.</p><p><strong>Elaboration</strong></p>Explain sequences of images in print texts and compare these to the ways hyperlinked digital texts are organised, explaining their effect on viewers'' interpretations<p>Interpreting narrative texts told as wordless picture books.</p><p>Identifying and comparing sequences of images revealed through different hyperlink choices.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1512','<p><strong>Content Description</strong></p><p>Understand the use of vocabulary to express greater precision of meaning, and know that words can have different meanings in different contexts.</p><p><strong>Elaboration</strong></p>Understand the use of vocabulary to express greater precision of meaning, and know that words can have different meanings in different contexts<p>Moving from general, &lsquo;all-purpose&rsquo; words, for example &lsquo;cut&rsquo;, to more specific words, for example &lsquo;slice&rsquo;, &lsquo;dice&rsquo;, &lsquo;fillet&rsquo;, &lsquo;segment&rsquo;.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1513','<p><strong>Content Description</strong></p><p>Understand how to use knowledge of known words, base words, prefixes and suffixes, word origins, letter patterns and spelling generalisations to spell new words.</p><p><strong>Elaboration</strong></p>Understand how to use knowledge of known words, base words, prefixes and suffixes, word origins, letter patterns and spelling generalisations to spell new words<p>Talking about how suffixes change over time and new forms are invented to reflect changing attitudes to gender, for example ''policewoman'' or ''salesperson''.</p><p>Using knowledge of known words and base words to spell new words, for example the spelling and meaning connections between ''vision'', ''television'' and ''revision''.</p><p>Learning that many complex words were originally hyphenated but are now written without a hyphen, for example ''uncommon, ''renew'', ''email'' and ''refine''.</p><p>Applying knowledge of spelling generalisations to spell new words, for example ''suitable'', ''likeable'' and ''collapsible''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1514','<p><strong>Content Description</strong></p><p>Explore less common plurals, and understand how a suffix changes the meaning or grammatical form of a word.</p><p><strong>Elaboration</strong></p>Explore less common plurals, and understand how a suffix changes the meaning or grammatical form of a word<p>Using knowledge of word origins and roots and related words to interpret and spell unfamiliar words, and learning about how these roots impact on plurals, for example ''cactus'' and ''cacti'', ''louse'' and ''lice''.</p><p>Understanding how some suffixes change the grammatical form of words, for example ''tion'' and ''ment'' can change verbs into nouns, ''protect'' to ''protection'', ''develop'' to ''development''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1829','<p><strong>Content Description</strong></p><p>Understand how to use phonic knowledge to read and write less familiar words that share common letter patterns but have different pronunciations&nbsp;.</p><p><strong>Elaboration</strong></p>Understand how to use phonic knowledge to read and write less familiar words that share common letter patterns but have different pronunciations&nbsp;<p>Recognising and writing less familiar words that share common letter patterns but have different pronunciations, for example ''journey'', ''your'', ''tour'' and ''sour''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELT1612','<p><strong>Content Description</strong></p><p>Create literary texts using realistic and fantasy settings and characters that draw on the worlds represented in texts students have experienced.</p><p><strong>Elaboration</strong></p>Create literary texts using realistic and fantasy settings and characters that draw on the worlds represented in texts students have experienced<p>Using texts with computer-based graphics, animation and 2D qualities, consider how and why particular traits for a character have been chosen.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELT1798','<p><strong>Content Description</strong></p><p>Create literary texts that experiment with structures, ideas and stylistic features of selected authors.</p><p><strong>Elaboration</strong></p>Create literary texts that experiment with structures, ideas and stylistic features of selected authors<p>Drawing upon fiction elements in a range of model texts - for example main idea, characterisation, setting (time and place), narrative point of view; and devices, for example figurative language (simile, metaphor, personification), as well as non-verbal conventions in digital and screen texts - in order to experiment with new, creative ways of communicating ideas, experiences and stories in literary texts.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELY1704','<p><strong>Content Description</strong></p><p>Plan, draft and publish imaginative, informative and persuasive print and multimodal texts, choosing text structures, language features, images and sound appropriate to purpose and audience.</p><p><strong>Elaboration</strong></p>Plan, draft and publish imaginative, informative and persuasive print and multimodal texts, choosing text structures, language features, images and sound appropriate to purpose and audience<p>Using research from print and digital resources to gather and organise information for writing.</p><p>Selecting an appropriate text structure for the writing purpose and sequencing content according to that text structure, introducing the topic, and grouping related information in well-sequenced paragraphs with a concluding statement.</p><p>Using vocabulary, including technical vocabulary, appropriate to purpose and context.</p><p>Using paragraphs to present and sequence a text.</p><p>Using appropriate grammatical features, including more complex sentences and relevant verb tense, pronoun reference, adverb and noun groups/phrases for effective descriptions.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELY1705','<p><strong>Content Description</strong></p><p>Re-read and edit student''s own and others'' work using agreed criteria for text structures and language features.</p><p><strong>Elaboration</strong></p>Re-read and edit student''s own and others'' work using agreed criteria for text structures and language features<p>Editing for flow and sense, organisation of ideas and choice of language, revising and trying new approaches if an element is not having the desired impact.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELY1706','<p><strong>Content Description</strong></p><p>Develop a handwriting style that is becoming legible, fluent and automatic.</p><p><strong>Elaboration</strong></p>Develop a handwriting style that is becoming legible, fluent and automatic<p>Using handwriting with increasing fluency and legibility appropriate to a wide range of writing purposes.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELY1707','<p><strong>Content Description</strong></p><p>Use a range of software including word processing programs with fluency to construct, edit and publish written text, and select, edit and place visual, print and audio elements.</p><p><strong>Elaboration</strong></p>Use a range of software including word processing programs with fluency to construct, edit and publish written text, and select, edit and place visual, print and audio elements<p>Writing letters in print and by email, composing with increasing fluency, accuracy and legibility and demonstrating understanding of what the audience may want to hear.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1518','<p><strong>Content Description</strong></p><p>Understand how authors often innovate on text structures and play with language features to achieve particular aesthetic, humorous and persuasive purposes and effects.</p><p><strong>Elaboration</strong></p>Understand how authors often innovate on text structures and play with language features to achieve particular aesthetic, humorous and persuasive purposes and effects<p>Exploring a range of everyday, community, literary and informative texts discussing elements of text structure and language features and comparing the overall structure and effect of authors'' choices in two or more texts.</p><p>Examining different works by an author who specialises in humour or pathos to identify strategies such as exaggeration and character embarrassment to amuse and to offer insights into characters'' feelings, so building empathy with their points of view and concern for their welfare.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1520','<p><strong>Content Description</strong></p><p>Understand that cohesive links can be made in texts by omitting or replacing words.</p><p><strong>Elaboration</strong></p>Understand that cohesive links can be made in texts by omitting or replacing words<p>Noting how a general word is often used for a more specific word already mentioned, for example &lsquo;Look at those apples. Can I have one?''.</p><p>Recognising how cohesion can be developed through repeating key words or by using synonyms or antonyms.</p><p>Observing how relationships between concepts can be represented visually through similarity, contrast, juxtaposition, repetition, class-subclass diagrams, part-whole diagrams, cause-and-effect figures, visual continuities and discontinuities.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1521','<p><strong>Content Description</strong></p><p>Understand the uses of commas to separate clauses.</p><p><strong>Elaboration</strong></p>Understand the uses of commas to separate clauses<p>Identifying different uses of commas in texts.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1522','<p><strong>Content Description</strong></p><p>Investigate how complex sentences can be used in a variety of ways to elaborate, extend and explain ideas.</p><p><strong>Elaboration</strong></p>Investigate how complex sentences can be used in a variety of ways to elaborate, extend and explain ideas<p>Investigating how the choice of conjunctions enables the construction of complex sentences to extend, elaborate and explain ideas, for example &lsquo;the town was&nbsp;flooded when the river broke its banks&rsquo; and &lsquo;the town was&nbsp;flooded because&nbsp;the river broke its banks&rsquo;.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1523','<p><strong>Content Description</strong></p><p>Understand how ideas can be expanded and sharpened through careful choice of verbs, elaborated tenses and a range of adverb groups/phrases.</p><p><strong>Elaboration</strong></p>Understand how ideas can be expanded and sharpened through careful choice of verbs, elaborated tenses and a range of adverb groups/phrases<p>Knowing that verbs often represent actions and that the choice of more expressive verbs makes an action more vivid (for example &#39;She ate her lunch&#39; compared to &#39;She gobbled up her lunch&#39;).</p><p>Knowing that adverb groups/phrases and prepositional phrases can provide important details about a happening(for example, ''At nine o&#39;clock the buzzer rang loudly throughout the school'') or state (for example, ''The tiger is a member of the cat family'').</p><p>Knowing the difference between the simple present tense (for example &#39;Pandas eat bamboo.&#39;) and the simple past tense (for example &#39;She replied.&#39;).</p><p>Knowing that the simple present tense is typically used to talk about either present states (for example, &lsquo;He lives in Darwin&rsquo;) or actions that happen regularly in the present (for example, &lsquo;He watches television every night&rsquo;) or that represent &lsquo;timeless&rsquo; happenings, as in information reports (for example, &lsquo;Bears hibernate in winter&rsquo;).</p><p>Knowing that there are various ways in English to refer to future time, for example auxiliary &lsquo;will&rsquo;, as in &lsquo;She will call you tomorrow&rsquo;; present tense, as in &lsquo;Tomorrow I leave for Hobart&rsquo;; and adverbials of time, as in &lsquo;She arrives in the morning&rsquo;.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1524','<p><strong>Content Description</strong></p><p>Identify and explain how analytical images like figures, tables, diagrams, maps and graphs contribute to our understanding of verbal information in factual and persuasive texts.</p><p><strong>Elaboration</strong></p>Identify and explain how analytical images like figures, tables, diagrams, maps and graphs contribute to our understanding of verbal information in factual and persuasive texts<p>Observing how sequential events can be represented visually by a series of images, including comic strips, timelines, photo stories, procedure diagrams and flowcharts, life-cycle diagrams, and the flow of images in picture books.</p><p>Observing how concepts, information and relationships can be represented visually through such images as tables, maps, graphs, diagrams, and icons.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1525','<p><strong>Content Description</strong></p><p>Investigate how vocabulary choices, including evaluative language can express shades of meaning, feeling and opinion.</p><p><strong>Elaboration</strong></p>Investigate how vocabulary choices, including evaluative language can express shades of meaning, feeling and opinion<p>Identifying (for example from reviews) the ways in which evaluative language is used to assess the qualities of the various aspects of the work in question.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1526','<p><strong>Content Description</strong></p><p>Understand how to use knowledge of known words, word origins including some Latin and Greek roots, base words, prefixes, suffixes, letter patterns and spelling generalisations to spell new words including technical words.</p><p><strong>Elaboration</strong></p>Understand how to use knowledge of known words, word origins including some Latin and Greek roots, base words, prefixes, suffixes, letter patterns and spelling generalisations to spell new words including technical words<p>Using a dictionary to explore and use knowledge of word origins, including some Greek roots, to spell words. For example, the Greek roots: ''ath'' meaning ''contest'' or ''outstanding skill'', ''pent'' meaning the number five, and ''dec'' meaning the number ten, inform the spelling and meaning of the words ''athlete'', ''decathlon'' and ''pentathlon''.</p><p>Applying accumulated knowledge of a wide range of letter patterns and spelling generalisations to spell new words, for example ''vacuum'', ''yacht'', ''ratio'' and ''synthesis''.</p><p>Expanding knowledge of prefixes and suffixes and exploring meaning relationships between words for example ''disappearance'', ''submarine'', ''subterranean'', ''poisonous'' and ''nervous''.</p><p>Applying accumulated knowledge of a wide range of letter patterns and spelling generalisations to spell new words, for example knowing how and why these words are spelt as follows: ''reliability'', ''handkerchief'' ''receive'', ''lollies'', ''trolleys'', ''climbing'', ''designed'' and ''emergency''.</p><p>Spelling technical words by applying morphemic knowledge, for example ''metaphorical'', ''biology'' and ''biodegradable''.</p><p>Learning about words from other languages, for example ''umbrella'' comes from the Italian word ombrello, and the word for ''yabby'' is derived from the Aboriginal word ''yabij''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1830','<p><strong>Content Description</strong></p><p>Understand how to use phonic knowledge and accumulated understandings about blending, letter-sound relationships, common and uncommon letter patterns and phonic generalisations to read and write increasingly complex words.</p><p><strong>Elaboration</strong></p>Understand how to use phonic knowledge and accumulated understandings about blending, letter-sound relationships, common and uncommon letter patterns and phonic generalisations to read and write increasingly complex words<p>Using phonic generalisations to read and write complex words with uncommon letter patterns, for example ''pneumonia'', ''resuscitate'' and ''vegetation''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELT1618','<p><strong>Content Description</strong></p><p>Create literary texts that adapt or combine aspects of texts students have experienced in innovative ways.</p><p><strong>Elaboration</strong></p>Create literary texts that adapt or combine aspects of texts students have experienced in innovative ways<p>Creating narratives in written, spoken or multimodal/digital format for more than one specified audience, requiring adaptation of narrative elements and language features.</p><p>Planning and creating texts that entertain, inform, inspire and/or emotionally engage familiar and less-familiar audiences.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELT1800','<p><strong>Content Description</strong></p><p>Experiment with text structures and language features and their effects in creating literary texts, for example, using imagery, sentence variation, metaphor and word choice.</p><p><strong>Elaboration</strong></p>Experiment with text structures and language features and their effects in creating literary texts, for example, using imagery, sentence variation, metaphor and word choice<p>Selecting and using sensory language to convey a vivid picture of places, feelings and events in a semi-structured verse form.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELY1714','<p><strong>Content Description</strong></p><p>Plan, draft and publish imaginative, informative and persuasive texts, choosing and experimenting with text structures, language features, images and digital resources appropriate to purpose and audience.</p><p><strong>Elaboration</strong></p>Plan, draft and publish imaginative, informative and persuasive texts, choosing and experimenting with text structures, language features, images and digital resources appropriate to purpose and audience<p>Creating informative texts for two different audiences, such as a visiting academic and a Year 3 class, that explore an aspect of biodiversity.</p><p>Using rhetorical devices, images, surprise techniques and juxtaposition of people and ideas and modal verbs and modal auxiliaries to enhance the persuasive nature of a text, recognising and exploiting audience susceptibilities.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELY1715','<p><strong>Content Description</strong></p><p>Re-read and edit students'' own and others'' work using agreed criteria and explaining editing choices.</p><p><strong>Elaboration</strong></p>Re-read and edit students'' own and others'' work using agreed criteria and explaining editing choices<p>Editing for coherence, sequence, effective choice of vocabulary, opening devices, dialogue and description, humour and pathos, as appropriate to the task and audience.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELY1716','<p><strong>Content Description</strong></p><p>Develop a handwriting style that is legible, fluent and automatic and varies according to audience and purpose.</p><p><strong>Elaboration</strong></p>Develop a handwriting style that is legible, fluent and automatic and varies according to audience and purpose<p>Using handwriting efficiently as a tool for a wide range of formal and informal text creation tasks.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELY1717','<p><strong>Content Description</strong></p><p>Use a range of software, including word processing programs, learning new functions as required to create texts.</p><p><strong>Elaboration</strong></p>Use a range of software, including word processing programs, learning new functions as required to create texts<p>Selecting and combining software functions as needed to create texts.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1531','<p><strong>Content Description</strong></p><p>Understand and explain how the text structures and language features of texts become more complex in informative and persuasive texts and identify underlying structures such as taxonomies, cause and effect, and extended metaphors.</p><p><strong>Elaboration</strong></p>Understand and explain how the text structures and language features of texts become more complex in informative and persuasive texts and identify underlying structures such as taxonomies, cause and effect, and extended metaphors<p>Learning about the structure of the book or film review and how it moves from context description to text summary and then to a text judgment.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1763','<p><strong>Content Description</strong></p><p>Understand that the coherence of more complex texts relies on devices that signal text structure and guide readers, for example overviews, initial and concluding paragraphs and topic sentences, indexes or site maps or breadcrumb trails for online texts.</p><p><strong>Elaboration</strong></p>Understand that the coherence of more complex texts relies on devices that signal text structure and guide readers, for example overviews, initial and concluding paragraphs and topic sentences, indexes or site maps or breadcrumb trails for online texts<p>Analysing the structure of media texts such as television news items and broadcasts and various types of newspaper and magazine articles.</p><p>Writing structured paragraphs for use in a range of academic settings such as paragraph responses, reports and presentations.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1532','<p><strong>Content Description</strong></p><p>Understand the use of punctuation to support meaning in complex sentences with prepositional phrases and embedded clauses.</p><p><strong>Elaboration</strong></p>Understand the use of punctuation to support meaning in complex sentences with prepositional phrases and embedded clauses<p>Discussing how qualifying statements add meaning to opinions and views in spoken texts.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1534','<p><strong>Content Description</strong></p><p>Recognise and understand that subordinate clauses embedded within noun groups/phrases are a common feature of written sentence structures and increase the density of information.</p><p><strong>Elaboration</strong></p>Recognise and understand that subordinate clauses embedded within noun groups/phrases are a common feature of written sentence structures and increase the density of information<p>Identifying and experimenting with a range of clause types and discussing the effect of these in the expression and development of ideas.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELA1536','<p><strong>Content Description</strong></p><p>Understand how modality is achieved through discriminating choices in modal verbs, adverbs, adjectives and nouns.</p><p><strong>Elaboration</strong></p>Understand how modality is achieved through discriminating choices in modal verbs, adverbs, adjectives and nouns<p>Observing and discussing how a sense of certainty, probability and obligation is created in texts.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELT1625','<p><strong>Content Description</strong></p><p>Create literary texts that adapt stylistic features encountered in other texts, for example, narrative viewpoint, structure of stanzas, contrast and juxtaposition.</p><p><strong>Elaboration</strong></p>Create literary texts that adapt stylistic features encountered in other texts, for example, narrative viewpoint, structure of stanzas, contrast and juxtaposition<p>Using aspects of texts in imaginative recreations such as re-situating a character from a text in a new situation.</p><p>Imagining a character''s life events (for example misadventures organised retrospectively to be presented as a series of flashbacks in scripted monologue supported by single images), making a sequel or prequel or rewriting an ending.</p><p>Creating chapters for an autobiography, short story or diary.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELT1805','<p><strong>Content Description</strong></p><p>Experiment with text structures and language features and their effects in creating literary texts, for example, using rhythm, sound effects, monologue, layout, navigation and colour.</p><p><strong>Elaboration</strong></p>Experiment with text structures and language features and their effects in creating literary texts, for example, using rhythm, sound effects, monologue, layout, navigation and colour<p>Experimenting with different narrative structures such as the epistolary form, flashback, multiple perspectives.</p><p>Transforming familiar print narratives into short video or film narratives, drawing on knowledge of the type of text and possible adaptations necessary to a new mode.</p><p>Drawing on literature and life experiences to create a poem, for example ballad, series of haiku.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELY1725','<p><strong>Content Description</strong></p><p>Plan, draft and publish imaginative, informative and persuasive texts, selecting aspects of subject matter and particular language, visual, and audio features to convey information and ideas.</p><p><strong>Elaboration</strong></p>Plan, draft and publish imaginative, informative and persuasive texts, selecting aspects of subject matter and particular language, visual, and audio features to convey information and ideas<p>Compiling a portfolio of texts in a range of modes related to a particular concept, purpose or audience, for example a class anthology of poems or stories.</p><p>Using appropriate textual conventions, create scripts for interviews, presentations, advertisements and radio segments.</p><p>Writing and delivering presentations with specific rhetorical devices to engage an audience.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELY1726','<p><strong>Content Description</strong></p><p>Edit for meaning by removing repetition, refining ideas, reordering sentences and adding or substituting words for impact.</p><p><strong>Elaboration</strong></p>Edit for meaning by removing repetition, refining ideas, reordering sentences and adding or substituting words for impact<p>Using collaborative technologies to jointly construct and edit texts.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('ACELY1728','<p><strong>Content Description</strong></p><p>Use a range of software, including word processing programs, to confidently create, edit and publish written and multimodal texts.</p><p><strong>Elaboration</strong></p>Use a range of software, including word processing programs, to confidently create, edit and publish written and multimodal texts<p>Understanding conventions associated with particular kinds of software and using them appropriately, for example synthesising information and ideas in dot points and sequencing information in presentations or timing scenes in animation.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA120','<p><strong>Content Description</strong></p><p>Understand that language can be represented as written text.</p><p><strong>Elaboration</strong></p>Understand that language can be represented as written text<p>Identifying object or action by matching object to word.</p><p>Contributing text during shared writing experiences.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA121','<p><strong>Content Description</strong></p><p>Copy own name and recognise some of the letters within it, and understand that pausing is presented as a full stop in written text.</p><p><strong>Elaboration</strong></p>Copy own name and recognise some of the letters within it, and understand that pausing is presented as a full stop in written text<p>Learning that each letter has two symbols, a capital and lowercase symbol.</p><p>Recognising the capital letter of their name in other contexts.</p><p>Understanding what a full stop looks like.</p><p>Locating full stops in text.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA122','<p><strong>Content Description</strong></p><p>Use, communicate or articulate high-frequency words and reproduce familiar sounds and their letters.</p><p><strong>Elaboration</strong></p>Use, communicate or articulate high-frequency words and reproduce familiar sounds and their letters<p>Identifying the beginning sound of own names and other familiar words.</p><p>Using and articulating a range of familiar words.</p><p>Repeating short refrains from texts, for example ''I think I can'', ''I''m not scared'', ''Where are you?''.</p><p>Identifying some words with the same onset, for example objects that start with the same letter as their name.</p><p>Learning to recognize some letter-sound relationships.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA123','<p><strong>Content Description</strong></p><p>Identify the onset of familiar words and some words that have the same rime.</p><p><strong>Elaboration</strong></p>Identify the onset of familiar words and some words that have the same rime<p>Recognising one-syllable spoken words that start with the same sound.</p><p>Recognising one-syllable spoken words with the same end sound.</p><p>Investigating sounds and syllables within familiar words.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELT124','<p><strong>Content Description</strong></p><p>Retell familiar text or event by sequencing images and simple statements.</p><p><strong>Elaboration</strong></p>Retell familiar text or event by sequencing images and simple statements<p>Identifying key images of a story.</p><p>Using two to three images in sequence to retell an event or familiar text.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY126','<p><strong>Content Description</strong></p><p>Review own text and make changes during shared editing.</p><p><strong>Elaboration</strong></p>Review own text and make changes during shared editing<p>Using delete and Caps Lock functions during shared editing of their own typing.</p><p>Making alternative selections of images and audio used, including music, during shared editing.</p><p>Checking their name, some patterns and symbols for size.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY127','<p><strong>Content Description</strong></p><p>Copy and write letters, symbols and numbers.</p><p><strong>Elaboration</strong></p>Copy and write letters, symbols and numbers<p>Using letters (including letter-like symbols) when ''writing''.</p><p>Using a tripod grip to hold and handle writing implements.</p><p>Developing finger strength and endurance by holding and handling small objects and materials.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY128','<p><strong>Content Description</strong></p><p>Use software or application by selecting images and suggesting simple sentences to accompany the image.</p><p><strong>Elaboration</strong></p>Use software or application by selecting images and suggesting simple sentences to accompany the image<p>Typing simple sentences from a sentence stem.</p><p>Recording a simple message or a retelling of a story or event, using a simple text to talk program, switch activated communication device or application such as ''audio memo'' or ''prologue2go''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA155','<p><strong>Content Description</strong></p><p>Understand that some language in written texts is unlike everyday spoken language.</p><p><strong>Elaboration</strong></p>Understand that some language in written texts is unlike everyday spoken language<p>Learning that written text in Standard Australian English has conventions about words, spaces between words, layout on the page and consistent spelling because it has to communicate when the speaker/writer is not present.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA156','<p><strong>Content Description</strong></p><p>Understand that punctuation is a feature of written text different from letters and recognise how capital letters are used for names, and that capital letters and full stops signal the beginning and end of sentences.</p><p><strong>Elaboration</strong></p>Understand that punctuation is a feature of written text different from letters and recognise how capital letters are used for names, and that capital letters and full stops signal the beginning and end of sentences<p>Pointing to the letters and the punctuation in a text.</p><p>Commenting on punctuation encountered in the everyday texts, for example ''That''s the letter that starts my name'', ''The name of my family and my town has a capital letter''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA157','<p><strong>Content Description</strong></p><p>Understand that spoken sounds and words can be written and know how to write some high-frequency words and other familiar words including their name.</p><p><strong>Elaboration</strong></p>Understand that spoken sounds and words can be written and know how to write some high-frequency words and other familiar words including their name<p>Recognising the most common sound made by each letter of the alphabet, including consonants and short vowel sounds.</p><p>Writing consonant-vowel-consonant words by writing letters to represent the sounds in the spoken words.</p><p>Knowing that spoken words are written down by listening to the sounds heard in the word and then writing letters to represent those sounds.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA158','<p><strong>Content Description</strong></p><p>Know how to use onset and rime to spell words where sounds map more directly onto letters.</p><p><strong>Elaboration</strong></p>Know how to use onset and rime to spell words where sounds map more directly onto letters<p>Breaking words into onset and rime, for example c/at.</p><p>Building word families using onset and rime, for example h/ot, g/ot, n/ot, sh/ot, sp/ot.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELT159','<p><strong>Content Description</strong></p><p>Retell familiar literary texts through performance, use of illustrations and images.</p><p><strong>Elaboration</strong></p>Retell familiar literary texts through performance, use of illustrations and images<p>Drawing, labelling and role playing representations of characters or events.</p><p>Reciting rhymes with actions.</p><p>Using digital technologies to retell events and recreate characters from favourite print and film texts.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY160','<p><strong>Content Description</strong></p><p>Create short texts to explore, record and report ideas and events using familiar words and beginning writing knowledge.</p><p><strong>Elaboration</strong></p>Create short texts to explore, record and report ideas and events using familiar words and beginning writing knowledge<p>Using image-making and beginning writing to represent characters and events in written, film and web-based texts.</p><p>Using speaking, writing and drawing to represent and communicate personal responses to ideas and events experienced through texts.</p><p>Creating short spoken, written and multimodal observations, recounts and descriptions, extending vocabulary and including some content-specific words in spoken and written texts.</p><p>Using beginning concepts about print, sound-letter and word knowledge and punctuation to create short texts.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY161','<p><strong>Content Description</strong></p><p>Participate in shared editing of students'' own texts for meaning, spelling, capital letters and full stops.</p><p><strong>Elaboration</strong></p>Participate in shared editing of students'' own texts for meaning, spelling, capital letters and full stops<p>Rereading collaboratively developed texts to check that they communicate what the authors intended.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY162','<p><strong>Content Description</strong></p><p>Understand that sounds in English are represented by upper- and lower-case letters that can be written using learned letter formation patterns for each case.</p><p><strong>Elaboration</strong></p>Understand that sounds in English are represented by upper- and lower-case letters that can be written using learned letter formation patterns for each case<p>Adopting correct posture and pencil grip.</p><p>Learning to produce simple handwriting movements.</p><p>Following clear demonstrations of how to construct each letter (for example where to start; which direction to write).</p><p>Learning to construct lower-case letters and to combine these into words.</p><p>Learning to construct some upper-case letters.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY163','<p><strong>Content Description</strong></p><p>Construct texts using software including word processing programs.</p><p><strong>Elaboration</strong></p>Construct texts using software including word processing programs<p>Using simple functions of keyboard and mouse including typing letters, scrolling, selecting icons and drop-down menu.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA189','<p><strong>Content Description</strong></p><p>Understand patterns of repetition and contrast in simple texts.</p><p><strong>Elaboration</strong></p>Understand patterns of repetition and contrast in simple texts<p>Identifying patterns of vocabulary items in texts (for example class/subclass patterns, part/whole patterns, compare/contrast patterns, cause-and-effect patterns, word associations/collocation).</p><p>Discussing different types of texts and identifying some characteristic features and elements (for example language patterns and repetition) in stories and poetry.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA190','<p><strong>Content Description</strong></p><p>Recognise that different types of punctuation, including full stops, question marks and exclamation marks, signal sentences that make statements, ask questions, express emotion or give commands.</p><p><strong>Elaboration</strong></p>Recognise that different types of punctuation, including full stops, question marks and exclamation marks, signal sentences that make statements, ask questions, express emotion or give commands<p>Using intonation and pauses in response to punctuation when reading.</p><p>Reading texts and identifying different sentence-level punctuation.</p><p>Writing different types of sentences, for example statements and questions, and discussing appropriate punctuation.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA191','<p><strong>Content Description</strong></p><p>Recognise and know how to use simple grammatical morphemes in word families.</p><p><strong>Elaboration</strong></p>Recognise and know how to use simple grammatical morphemes in word families<p>Building word families from common morphemes (for example ''play'', ''plays'', ''playing'', ''played'', ''playground'').</p><p>Using morphemes to read words (for example by recognising the ''stem'' in words such as ''walk/ed'').</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA184','<p><strong>Content Description</strong></p><p>Understand how to use visual memory to write high-frequency words, and that some high-frequency words have regular and irregular spelling components.</p><p><strong>Elaboration</strong></p>Understand how to use visual memory to write high-frequency words, and that some high-frequency words have regular and irregular spelling components<p>Using strategies such as look-say-cover-write-check to learn an increasing number of high-frequency sight words recognised in texts, including words with regular spelling patterns such as ''them'' and ''got'' and irregular patterns such as ''one'' and ''was''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELT192','<p><strong>Content Description</strong></p><p>Recreate texts imaginatively using drawing, writing, performance and digital forms of communication.</p><p><strong>Elaboration</strong></p>Recreate texts imaginatively using drawing, writing, performance and digital forms of communication<p>Creating visual representations of literary texts from Aboriginal, Torres Strait Islander or Asian cultures.</p><p>Writing character descriptions drawn from illustrations in stories.</p><p>Retelling key events in stories using oral language, arts, digital technologies and performance media.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELT193','<p><strong>Content Description</strong></p><p>Build on familiar texts by using similar characters, repetitive patterns or vocabulary.</p><p><strong>Elaboration</strong></p>Build on familiar texts by using similar characters, repetitive patterns or vocabulary<p>Creating familiar text types in shared or independent writing by drawing on details of characters, repeated phrases and similar vocabulary encountered in known texts.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY194','<p><strong>Content Description</strong></p><p>Create short imaginative and informative texts that show emerging use of appropriate text structure, sentence-level grammar, word choice, spelling, punctuation and appropriate multimodal elements.</p><p><strong>Elaboration</strong></p>Create short imaginative and informative texts that show emerging use of appropriate text structure, sentence-level grammar, word choice, spelling, punctuation and appropriate multimodal elements<p>Referring to learned knowledge of text structure and grammar when creating a new text.</p><p>Applying new vocabulary appropriately in creating text.</p><p>Learning how to plan spoken and written communications so that listeners and readers might follow the sequence of ideas or events.</p><p>Beginning to consider audience in designing a communication involving visual components, selecting images for maximum impact.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY195','<p><strong>Content Description</strong></p><p>Reread student''s own texts and discuss possible changes to improve meaning, spelling and punctuation.</p><p><strong>Elaboration</strong></p>Reread student''s own texts and discuss possible changes to improve meaning, spelling and punctuation<p>Adding or deleting words on page or screen to improve meaning, for example adding an adjective to a noun.</p><p>Reading own work aloud to listen for grammatical correctness: checking use of capital letters, full stops, question marks and exclamation marks.</p><p>Checking for inclusion of capital letters and full stops.</p><p>Identifying words which might not be spelt correctly.</p><p>Beginning to use dictionaries and classroom charts to check and correct spelling of less familiar words.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY196','<p><strong>Content Description</strong></p><p>Understand how to use learned formation patterns to represent sounds and write words using combinations of unjoined upper- and lower-case letters.</p><p><strong>Elaboration</strong></p>Understand how to use learned formation patterns to represent sounds and write words using combinations of unjoined upper- and lower-case letters<p>Using correct posture and pencil grip.</p><p>Learning how each letter is constructed including where to start and the direction to follow.</p><p>Writing words legibly using unjoined print script of consistent size.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY197','<p><strong>Content Description</strong></p><p>Construct texts that incorporate supporting images using software including word processing programs.</p><p><strong>Elaboration</strong></p>Construct texts that incorporate supporting images using software including word processing programs<p>Creating digital images and composing a story or information sequence on screen using images and captions.</p><p>Adding images to digital written communications such as emails with pictures of self, classmates or location.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA224','<p><strong>Content Description</strong></p><p>Understand how texts are made cohesive by the use of resources, including word associations, synonyms, and antonyms.</p><p><strong>Elaboration</strong></p>Understand how texts are made cohesive by the use of resources, including word associations, synonyms, and antonyms<p>Exploring how texts develop their themes and ideas, building information by connecting similar and contrasting dissimilar things.</p><p>Mapping examples of word associations in texts, for example words that refer to the main character.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA225','<p><strong>Content Description</strong></p><p>Recognise that capital letters signal proper nouns and commas are used to separate items in lists.</p><p><strong>Elaboration</strong></p>Recognise that capital letters signal proper nouns and commas are used to separate items in lists<p>Talking about how a comma can be used to separate two or more elements in a list, for example ''At the museum they saw a tiger, a dinosaur and two snakes''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA226','<p><strong>Content Description</strong></p><p>Understand how to use digraphs, long vowels, blends, silent letters and syllabification to spell simple words including compound words.</p><p><strong>Elaboration</strong></p>Understand how to use digraphs, long vowels, blends, silent letters and syllabification to spell simple words including compound words<p>Drawing on knowledge of high-frequency sight words.</p><p>Drawing on knowledge of sound-letter relationships (for example breaking words into syllables and phonemes).</p><p>Using known words in writing and spelling unknown words using developing visual, graphophonic and morphemic knowledge.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA227','<p><strong>Content Description</strong></p><p>Use visual memory to write high-frequency words and words where spelling is not predictable from the sounds.</p><p><strong>Elaboration</strong></p>Use visual memory to write high-frequency words and words where spelling is not predictable from the sounds<p>Writing sight words (because, said) and other words that cannot be sounded out phonetically (bird, phone) by drawing on knowledge of letter patterns, word shape and possible sequencing of letters in English (for example, jam is possible but not jxm).</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELT228','<p><strong>Content Description</strong></p><p>Create events and characters using different media that develop key events and characters from literary texts.</p><p><strong>Elaboration</strong></p>Create events and characters using different media that develop key events and characters from literary texts<p>Creating imaginative reconstructions of stories and poetry using a range of print and digital media.</p><p>Telling known stories from a different point of view.</p><p>Orally, in writing or using digital media, constructing a sequel to a known story.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELT229','<p><strong>Content Description</strong></p><p>Build on familiar texts by experimenting with character, setting or plot.</p><p><strong>Elaboration</strong></p>Build on familiar texts by experimenting with character, setting or plot<p>Innovating on  known narratives in shared or independent writing by changing or adding to details of the characters, setting or plot.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY230','<p><strong>Content Description</strong></p><p>Create short imaginative, informative and persuasive texts using growing knowledge of text structures and language features for familiar and some less familiar audiences, selecting print and multimodal elements appropriate to the audience and purpose.</p><p><strong>Elaboration</strong></p>Create short imaginative, informative and persuasive texts using growing knowledge of text structures and language features for familiar and some less familiar audiences, selecting print and multimodal elements appropriate to the audience and purpose<p>Learning how to plan spoken and written communications so that listeners and readers might follow the sequence of ideas or events.</p><p>Sequencing content according to text structure.</p><p>Using appropriate simple and compound sentence to express and combine ideas.</p><p>Using vocabulary, including technical vocabulary, appropriate to text type and purpose.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY231','<p><strong>Content Description</strong></p><p>Reread and edit text for spelling, sentence-boundary punctuation and text structure.</p><p><strong>Elaboration</strong></p>Reread and edit text for spelling, sentence-boundary punctuation and text structure<p>Reading their work and adding, deleting or changing words, prepositional phrases or sentences to improve meaning, for example replacing an everyday noun with a technical one in an informative text.</p><p>Checking spelling using a dictionary.</p><p>Checking for inclusion of relevant punctuation including capital letters to signal names, as well as sentence beginnings, full stops, question marks and exclamation marks.</p><p>Making significant changes to their texts using a word processing program ( for example add, delete or move sentences).</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY232','<p><strong>Content Description</strong></p><p>Write words and sentences legibly using upper- and lower-case letters that are applied with growing fluency using an appropriate pen/pencil grip and body position.</p><p><strong>Elaboration</strong></p>Write words and sentences legibly using upper- and lower-case letters that are applied with growing fluency using an appropriate pen/pencil grip and body position<p>Using correct pencil grip and posture.</p><p>Writing sentences legibly and fluently using unjoined print script of consistent size.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY233','<p><strong>Content Description</strong></p><p>Construct texts featuring print, visual and audio elements using software, including word processing programs.</p><p><strong>Elaboration</strong></p>Construct texts featuring print, visual and audio elements using software, including word processing programs<p>Experimenting with and combining elements of software programs to create texts.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA259','<p><strong>Content Description</strong></p><p>Understand that paragraphs are a key organisational feature of written texts.</p><p><strong>Elaboration</strong></p>Understand that paragraphs are a key organisational feature of written texts<p>Noticing how longer texts are organised into paragraphs, each beginning with a topic sentence/paragraph opener which predicts how the paragraph will develop and is then elaborated in various ways.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA260','<p><strong>Content Description</strong></p><p>Know that word contractions are a feature of informal language and that apostrophes of contraction are used to signal missing letters.</p><p><strong>Elaboration</strong></p>Know that word contractions are a feature of informal language and that apostrophes of contraction are used to signal missing letters<p>Recognising both grammatically accurate and inaccurate usage of the apostrophe in everyday texts such as signs in the community and newspaper advertisements.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA261','<p><strong>Content Description</strong></p><p>Understand that a clause is a unit of grammar usually containing a subject and a verb and that these need to be in agreement.</p><p><strong>Elaboration</strong></p>Understand that a clause is a unit of grammar usually containing a subject and a verb and that these need to be in agreement<p>Knowing that a clause is basically a group of words that contains a verb.</p><p>Knowing that, in terms of meaning, a basic clause represents: what is happening; who or what is participating, and the surrounding circumstances.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA262','<p><strong>Content Description</strong></p><p>Understand that verbs represent different processes (doing, thinking, saying, and relating) and that these processes are anchored in time through tense.</p><p><strong>Elaboration</strong></p>Understand that verbs represent different processes (doing, thinking, saying, and relating) and that these processes are anchored in time through tense<p>Identifying different types of verbs and the way they add meaning to a sentence.</p><p>Exploring action and saying verbs in narrative texts to show how they give information about what characters do and say.</p><p>Exploring the use of sensing verbs and how they allow readers to know what characters think and feel.</p><p>Exploring the use of relating verbs in constructing definitions and descriptions.</p><p>Learning how time is represented through the tense of a verb and other structural, language and visual features.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA263','<p><strong>Content Description</strong></p><p>Understand how to use letter-sound relationships and less common letter combinations to spell words.</p><p><strong>Elaboration</strong></p>Understand how to use letter-sound relationships and less common letter combinations to spell words<p>Using spelling strategies such as: phonological knowledge (for example diphthongs and other ambiguous vowel sounds in more complex words); three-letter clusters (for example ''thr'', ''shr'', ''squ''); visual knowledge (for example more complex single-syllable homophones such as ''break/brake'', ''ate/eight''); morphemic knowledge (for example inflectional endings in single-syllable words, plural and past tense); generalisations (for example to make a word plural when it ends in ''s'', ''sh'', ''ch'', or ''z'' add ''es''); and using knowledge of how different letters and combinations of letters represent different sounds, including less common combinations, for example, ''dge'' after a short vowel as in ''badge'', to write words in independent writing.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELT264','<p><strong>Content Description</strong></p><p>Create imaginative texts based on characters, settings and events from students'' own and other cultures including through the use of visual features.</p><p><strong>Elaboration</strong></p>Create imaginative texts based on characters, settings and events from students'' own and other cultures including through the use of visual features<p>Drawing on literary texts read, viewed and listened to for inspiration and ideas, appropriating language to create mood and characterisation.</p><p>Innovating on texts read, viewed and listened to by changing the point of view, revising an ending or creating a sequel.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELT265','<p><strong>Content Description</strong></p><p>Create texts that adapt language features and patterns encountered in literary texts.</p><p><strong>Elaboration</strong></p>Create texts that adapt language features and patterns encountered in literary texts<p>Creating visual and multimodal texts based on Aboriginal and Torres Strait Islander or Asian literature, applying one or more visual elements to convey the intent of the original text.</p><p>Creating multimodal texts that combine visual images, sound effects, music and voice overs to convey settings and events in a fantasy world.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY266','<p><strong>Content Description</strong></p><p>Plan, draft and publish imaginative, informative and persuasive texts demonstrating increasing control over text structures and language features and selecting print and multimodal elements appropriate to the audience and purpose.</p><p><strong>Elaboration</strong></p>Plan, draft and publish imaginative, informative and persuasive texts demonstrating increasing control over text structures and language features and selecting print and multimodal elements appropriate to the audience and purpose<p>Using print and digital resources to gather information about a topic.</p><p>Selecting appropriate text structure for a writing purpose and sequencing content for clarity and audience impact.</p><p>Using appropriate simple, compound and complex sentences to express and combine ideas.</p><p>Using vocabulary, including technical vocabulary, relevant to the text type and purpose, and appropriate sentence structures to express and combine ideas.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY267','<p><strong>Content Description</strong></p><p>Reread and edit texts for meaning, appropriate structure, grammatical choices and punctuation.</p><p><strong>Elaboration</strong></p>Reread and edit texts for meaning, appropriate structure, grammatical choices and punctuation<p>Using glossaries, print and digital dictionaries and spell check to edit spelling, realising that spell check accuracy depends on understanding the word function, for example there/their; rain/reign.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY268','<p><strong>Content Description</strong></p><p>Understand the conventions for writing words and sentences using joined letters that are clearly formed and consistent in size.</p><p><strong>Elaboration</strong></p>Understand the conventions for writing words and sentences using joined letters that are clearly formed and consistent in size<p>Practising how to join letters to construct a fluent handwriting style.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY269','<p><strong>Content Description</strong></p><p>Use software including word processing programs with growing speed and efficiency to construct and edit texts featuring visual, print and audio elements.</p><p><strong>Elaboration</strong></p>Use software including word processing programs with growing speed and efficiency to construct and edit texts featuring visual, print and audio elements<p>Using features of relevant technologies to plan, sequence, compose and edit multimodal texts.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA290','<p><strong>Content Description</strong></p><p>Understand how texts are made cohesive through the use of linking devices including pronoun reference and text connectives.</p><p><strong>Elaboration</strong></p>Understand how texts are made cohesive through the use of linking devices including pronoun reference and text connectives<p>Knowing how authors construct texts that are cohesive and coherent by using pronouns that link to something previously mentioned, determiners (for example ''this'', ''that'', ''these'', ''those'', ''the''), text connectives that create links between sentences (for example ''however'', ''therefore'', ''nevertheless'', ''in addition'', ''by contrast'', ''in summary'').</p><p>Identifying how participants are tracked through a text by, for example, using pronouns to refer back to noun groups/phrases.</p><p>Describing how text connectives link sections of a text providing sequences through time, for example ''firstly'', ''then'', ''next'', and ''finally''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA291','<p><strong>Content Description</strong></p><p>Recognise how quotation marks are used in texts to signal dialogue, titles and quoted (direct) speech.</p><p><strong>Elaboration</strong></p>Recognise how quotation marks are used in texts to signal dialogue, titles and quoted (direct) speech<p>Exploring texts to identify the use of quotation marks.</p><p>Experimenting with the use of quotation marks in own writing.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA292','<p><strong>Content Description</strong></p><p>Understand that the meaning of sentences can be enriched through the use of noun groups/phrases and verb groups/phrases and prepositional phrases.</p><p><strong>Elaboration</strong></p>Understand that the meaning of sentences can be enriched through the use of noun groups/phrases and verb groups/phrases and prepositional phrases<p>Creating richer, more specific descriptions through the use of noun groups/phrases (for example, in narrative texts, ''their very old Siamese cat''; in reports, &#39;its extremely high mountain ranges&#39;).</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA293','<p><strong>Content Description</strong></p><p>Incorporate new vocabulary from a range of sources, including vocabulary encountered in research, into own texts.</p><p><strong>Elaboration</strong></p>Incorporate new vocabulary from a range of sources, including vocabulary encountered in research, into own texts<p>Building etymological knowledge about word origins (for example ''thermometer'') and building vocabulary from research about technical and subject specific topics.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA294','<p><strong>Content Description</strong></p><p>Understand how to use phonic generalisations to identify and write words with more complex letter combinations.</p><p><strong>Elaboration</strong></p>Understand how to use phonic generalisations to identify and write words with more complex letter combinations<p>Using knowledge of complex spelling patterns to read and write words, for example ''bought''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA295','<p><strong>Content Description</strong></p><p>Understand how to use spelling patterns and generalisations including syllabification, letter combinations including double letters, and morphemic knowledge to build word families.</p><p><strong>Elaboration</strong></p>Understand how to use spelling patterns and generalisations including syllabification, letter combinations including double letters, and morphemic knowledge to build word families<p>Using phonological knowledge (for example long vowel patterns in multi-syllabic words) and consonant clusters (for example ''straight'', ''throat'', ''screen'', ''squawk'').</p><p>Using visual knowledge (for example diphthongs in more complex words and other ambiguous vowel sounds, as in ''oy'', ''oi'', ''ou'', ''ow'', ''ould'', ''u'', ''ough'', ''au'', ''aw''), silent beginning consonant patterns (for example ''gn'' and ''kn'').</p><p>Applying generalisations, such as doubling (for example ''running'') and ''e''-drop (for example ''hoping'').</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA296','<p><strong>Content Description</strong></p><p>Recognise homophones and know how to use context to identify correct spelling.</p><p><strong>Elaboration</strong></p>Recognise homophones and know how to use context to identify correct spelling<p>Using meaning and context when spelling words, for example when differentiating between homophones such as  ''to'', ''too'', ''two''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELT298','<p><strong>Content Description</strong></p><p>Create literary texts that explore students'' own experiences and imagining.</p><p><strong>Elaboration</strong></p>Create literary texts that explore students'' own experiences and imagining<p>Drawing upon literary texts they have encountered and experimenting with changing particular aspects, for example the time or place of the setting, adding characters or changing their personalities, or offering an alternative point of view on key ideas.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELT297','<p><strong>Content Description</strong></p><p>Create literary texts by developing storylines, characters and settings.</p><p><strong>Elaboration</strong></p>Create literary texts by developing storylines, characters and settings<p>Collaboratively plan, compose, sequence and prepare a literary text along a familiar storyline, using film, sound and images to convey setting, characters and points of drama in the plot.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY299','<p><strong>Content Description</strong></p><p>Plan, draft and publish imaginative, informative and persuasive texts containing key information and supporting details for a widening range of audiences, demonstrating increasing control over text structures and language features.</p><p><strong>Elaboration</strong></p>Plan, draft and publish imaginative, informative and persuasive texts containing key information and supporting details for a widening range of audiences, demonstrating increasing control over text structures and language features<p>Using research from print and digital resources to gather ideas, integrating information from a range of sources, selecting text structure and planning how to group ideas into paragraphs to sequence content, and choosing vocabulary to suit topic and communication purpose.</p><p>Using appropriate simple, compound and complex sentences to express and combine ideas.</p><p>Using grammatical features including different types of verb groups/phrases, noun groups/phrases, adverb groups/phrases and prepositional phrases for effective descriptions as related to purpose and context (for example, development of a character&rsquo;s actions or a description in a report).</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY300','<p><strong>Content Description</strong></p><p>Reread and edit for meaning by adding, deleting or moving words or word groups to improve content and structure.</p><p><strong>Elaboration</strong></p>Reread and edit for meaning by adding, deleting or moving words or word groups to improve content and structure<p>Revising written texts: editing for grammatical and spelling accuracy and clarity of the text, to improve the connection between ideas and overall fluency.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY301','<p><strong>Content Description</strong></p><p>Handwrite using clearly-formed joined letters, and develop increased fluency and automaticity.</p><p><strong>Elaboration</strong></p>Handwrite using clearly-formed joined letters, and develop increased fluency and automaticity<p>Using handwriting fluency with speed for a wide range of tasks.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY302','<p><strong>Content Description</strong></p><p>Use a range of software including word processing programs to construct, edit and publish written text, and select, edit and place visual, print and audio elements.</p><p><strong>Elaboration</strong></p>Use a range of software including word processing programs to construct, edit and publish written text, and select, edit and place visual, print and audio elements<p>Identifying, selecting and using appropriate software programs for constructing text.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA321','<p><strong>Content Description</strong></p><p>Understand that the starting point of a sentence gives prominence to the message in the text and allows for prediction of how the text will unfold.</p><p><strong>Elaboration</strong></p>Understand that the starting point of a sentence gives prominence to the message in the text and allows for prediction of how the text will unfold<p>Observing how writers use the beginning of a sentence to signal to the reader how the text is developing (for example ''Snakes are reptiles. They have scales and no legs. Many snakes are poisonous. However, in Australia they are protected'').</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA322','<p><strong>Content Description</strong></p><p>Understand how the grammatical category of possessives is signalled through apostrophes and how to use apostrophes with common and proper nouns.</p><p><strong>Elaboration</strong></p>Understand how the grammatical category of possessives is signalled through apostrophes and how to use apostrophes with common and proper nouns<p>Learning that in Standard Australian English regular plural nouns ending in ''s'' form the possessive by adding just the apostrophe (for example ''my parents&#39; car'').</p><p>Learning that in Standard Australian English for proper nouns a variant form without the second ''s'' is sometimes found (for example ''James''s house'' or ''James'' house'').</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA323','<p><strong>Content Description</strong></p><p>Understand the difference between main and subordinate clauses and that a complex sentence involves at least one subordinate clause.</p><p><strong>Elaboration</strong></p>Understand the difference between main and subordinate clauses and that a complex sentence involves at least one subordinate clause<p>Knowing that the function of complex sentences is to make connections between ideas, such as: to provide a reason (for example ''He jumped up because the bell rang.''), to state a purpose (for example ''She raced home in order to confront her brother.''), to express a condition (for example ''It will break if you push it.''), to make a concession (for example ''She went to work even though she was not feeling well.''), to link two ideas in terms of various time relations (for example ''Nero fiddled while Rome burned.'').</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA324','<p><strong>Content Description</strong></p><p>Understand how noun groups/phrases and adjective groups/phrases can be expanded in a variety of ways to provide a fuller description of the person, place, thing or idea.</p><p><strong>Elaboration</strong></p>Understand how noun groups/phrases and adjective groups/phrases can be expanded in a variety of ways to provide a fuller description of the person, place, thing or idea<p>Learning how to expand a description by combining a related set of nouns and adjectives - ''Two old brown cattle dogs sat on the ruined front veranda of the deserted house''.</p><p>Observing how descriptive details can be built up around a noun or an adjective, forming a group/phrase (for example, ''this very smelly cleaning cloth in the sink'' is a noun group/phrase and ''as pretty as the flowers in May'' is an adjective group/phrase).</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA325','<p><strong>Content Description</strong></p><p>Understand the use of vocabulary to express greater precision of meaning, and know that words can have different meanings in different contexts.</p><p><strong>Elaboration</strong></p>Understand the use of vocabulary to express greater precision of meaning, and know that words can have different meanings in different contexts<p>Moving from general, ''all-purpose'' words, for example ''cut'' to more specific words, for example ''slice'', ''dice'', ''fillet'', ''segment''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA326','<p><strong>Content Description</strong></p><p>Recognise and write less familiar words that share common letter patterns but have different pronunciations.</p><p><strong>Elaboration</strong></p>Recognise and write less familiar words that share common letter patterns but have different pronunciations<p>Spelling words that share common letter patterns but have different pronunciations, for example the ''ou'' in ''journey'', ''your'', ''tour'', ''sour''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELT328','<p><strong>Content Description</strong></p><p>Create literary texts using realistic and fantasy settings and characters that draw on the worlds represented in texts students have experienced.</p><p><strong>Elaboration</strong></p>Create literary texts using realistic and fantasy settings and characters that draw on the worlds represented in texts students have experienced<p>Using texts with computer-based graphics, animation and 2D qualities, consider how and why particular traits for a character have been chosen.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELT327','<p><strong>Content Description</strong></p><p>Create literary texts that experiment with structures, ideas and stylistic features of selected authors.</p><p><strong>Elaboration</strong></p>Create literary texts that experiment with structures, ideas and stylistic features of selected authors<p>Drawing upon fiction elements in a range of model texts - for example main idea, characterisation, setting (time and place), narrative point of view; and devices, for example figurative language (simile, metaphor, personification), as well as non-verbal conventions in digital and screen texts - in order to experiment with new, creative ways of communicating ideas, experiences and stories in literary texts.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY329','<p><strong>Content Description</strong></p><p>Plan, draft and publish imaginative, informative and persuasive print and multimodal texts, choosing text structures, language features, images and sound appropriate to purpose and audience.</p><p><strong>Elaboration</strong></p>Plan, draft and publish imaginative, informative and persuasive print and multimodal texts, choosing text structures, language features, images and sound appropriate to purpose and audience<p>Using research from print and digital resources to gather and organise information for writing.</p><p>Selecting an appropriate text structure for the writing purpose and sequencing content according to that text structure, introducing the topic, and grouping related information in well-sequenced paragraphs with a concluding statement.</p><p>Using vocabulary, including technical vocabulary, appropriate to purpose and context.</p><p>Using paragraphs to present and sequence a text.</p><p>Using appropriate grammatical features, including more complex sentences and relevant verb tense, pronoun reference, adverb and noun groups/phrases for effective descriptions.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY330','<p><strong>Content Description</strong></p><p>Reread and edit own and others'' work using agreed criteria for text structures and language features.</p><p><strong>Elaboration</strong></p>Reread and edit own and others'' work using agreed criteria for text structures and language features<p>Editing for flow and sense, organisation of ideas and choice of language, revising and trying new approaches if an element is not having the desired impact.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY331','<p><strong>Content Description</strong></p><p>Develop a handwriting style that is becoming legible, fluent and automatic.</p><p><strong>Elaboration</strong></p>Develop a handwriting style that is becoming legible, fluent and automatic<p>Using handwriting with increasing fluency and legibility appropriate to a wide range of writing purposes.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY332','<p><strong>Content Description</strong></p><p>Use a range of software including word processing programs to construct, edit and publish written text, and select, edit and place visual, print and audio elements.</p><p><strong>Elaboration</strong></p>Use a range of software including word processing programs to construct, edit and publish written text, and select, edit and place visual, print and audio elements<p>Writing letters in print and by email, composing with increasing fluency, accuracy and legibility and demonstrating understanding of what the audience may want to hear.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA348','<p><strong>Content Description</strong></p><p>Understand that cohesive links can be made in texts by omitting or replacing words.</p><p><strong>Elaboration</strong></p>Understand that cohesive links can be made in texts by omitting or replacing words<p>Noting how writers often substitute a general word for a more specific word already mentioned, thus creating a cohesive link between the words (for example, ''Look at those apples. Can I take these big ones?'', where ''ones'' substitutes for ''apples'').</p><p>Noting how writers often substitute a general word for a more specific word already mentioned, thus creating a cohesive link between the words (for example &#39;Look at those apples. Can I have one?&#39;).</p><p>Recognising how cohesion can be developed through repeating key words or by using synonyms or antonyms.</p><p>Observing how relationships between concepts can be represented visually through similarity, contrast, juxtaposition, repetition, class-subclass diagrams, part-whole diagrams, cause-and-effect figures, visual continuities and discontinuities.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA349','<p><strong>Content Description</strong></p><p>Understand the uses of commas to separate clauses.</p><p><strong>Elaboration</strong></p>Understand the uses of commas to separate clauses<p>Identifying different uses of commas in texts.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA350','<p><strong>Content Description</strong></p><p>Investigate how complex sentences can be used in a variety of ways to elaborate, extend and explain ideas.</p><p><strong>Elaboration</strong></p>Investigate how complex sentences can be used in a variety of ways to elaborate, extend and explain ideas<p>Knowing that a complex sentence typically consists of a main clause and a subordinate clause.</p><p>Knowing that the function of complex sentences is to make connections between ideas, such as: to provide a reason (for example ''He jumped up because the bell rang''); to state a purpose (for example ''She raced home in order to confront her brother''); to express a condition (for example ''It will break if you push it''); to make a concession (for example ''She went to work even though she was not feeling well''); to link two ideas in terms of various time relations (for example ''Nero fiddled while Rome burned'').</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA351','<p><strong>Content Description</strong></p><p>Understand how ideas can be expanded and sharpened through careful choice of verbs, elaborated tenses and a range of adverb groups/phrases.</p><p><strong>Elaboration</strong></p>Understand how ideas can be expanded and sharpened through careful choice of verbs, elaborated tenses and a range of adverb groups/phrases<p>Knowing that verbs often represent actions and that the choice of more expressive verbs makes an action more vivid (for example &#39;She ate her lunch&#39; compared to &#39;She gobbled up her lunch&#39;).</p><p>Knowing that adverb groups/phrases and prepositional phrases can provide important details about a happening(for example, ''At nine o&#39;clock the buzzer rang loudly throughout the school'') or state (for example, ''The tiger is a member of the cat family'').</p><p>Knowing the difference between the simple present tense (for example &#39;Pandas eat bamboo.&#39;) and the simple past tense (for example &#39;She replied.&#39;).</p><p>Knowing that the simple present tense is typically used to talk about either present states (for example, &lsquo;He lives in Darwin&rsquo;) or actions that happen regularly in the present (for example, &lsquo;He watches television every night&rsquo;) or that represent &lsquo;timeless&rsquo; happenings, as in information reports (for example, &lsquo;Bears hibernate in winter&rsquo;).</p><p>Knowing that there are various ways in English to refer to future time (for example &#39;She will call you tomorrow&#39;; &#39;I am going to the movies tomorrow&#39;; &#39;Tomorrow I leave for Hobart&#39;).</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA352','<p><strong>Content Description</strong></p><p>Investigate how vocabulary choices, including evaluative language can express shades of meaning, feeling and opinion.</p><p><strong>Elaboration</strong></p>Investigate how vocabulary choices, including evaluative language can express shades of meaning, feeling and opinion<p>Identifying (for example from reviews) the ways in which evaluative language is used to assess the qualities of the various aspects of the work in question.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA353','<p><strong>Content Description</strong></p><p>Understand how to use phonic knowledge and accumulated understandings about blending, letter-sound relationships, common and uncommon letter patterns and phonic generalisations to recognise and write increasingly complex words.</p><p><strong>Elaboration</strong></p>Understand how to use phonic knowledge and accumulated understandings about blending, letter-sound relationships, common and uncommon letter patterns and phonic generalisations to recognise and write increasingly complex words<p>Spelling increasingly complex words using understanding of common letter patterns, for example ''pneumonia''.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA354','<p><strong>Content Description</strong></p><p>Understand how to use banks of known words, word origins, base words, prefixes, suffixes, spelling patterns and generalisations to spell new words, including technical words and words adopted from other languages.</p><p><strong>Elaboration</strong></p>Understand how to use banks of known words, word origins, base words, prefixes, suffixes, spelling patterns and generalisations to spell new words, including technical words and words adopted from other languages<p>Adopting a range of spelling strategies to recall and attempt to spell new words.</p><p>Using a dictionary to correct own spelling.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELT356','<p><strong>Content Description</strong></p><p>Create literary texts that adapt or combine aspects of texts students have experienced in innovative ways.</p><p><strong>Elaboration</strong></p>Create literary texts that adapt or combine aspects of texts students have experienced in innovative ways<p>Creating narratives in written, spoken or multimodal/digital format for more than one specified audience, requiring adaptation of narrative elements and language features.</p><p>Planning and creating texts that entertain, inform, inspire and/or emotionally engage familiar and less-familiar audiences.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELT355','<p><strong>Content Description</strong></p><p>Experiment with text structures and language features and their effects in creating literary texts.</p><p><strong>Elaboration</strong></p>Experiment with text structures and language features and their effects in creating literary texts<p>Selecting and using sensory language to convey a vivid picture of places, feelings and events in a semi-structured verse form.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY357','<p><strong>Content Description</strong></p><p>Compare texts including media texts that represent ideas and events in different ways, explaining the effects of the different approaches.</p><p><strong>Elaboration</strong></p>Compare texts including media texts that represent ideas and events in different ways, explaining the effects of the different approaches<p>Identifying and exploring news reports of the same event, and discuss the language choices and point of view of the writers.</p><p>Using display advertising as a topic vehicle for close analysis of the ways images and words combine for deliberate effect including examples from the countries of Asia (for example comparing Hollywood film posters with Indian Bollywood film posters).</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY358','<p><strong>Content Description</strong></p><p>Plan, draft and publish imaginative, informative and persuasive texts, choosing and experimenting with text structures, language features, images and digital resources appropriate to purpose and audience.</p><p><strong>Elaboration</strong></p>Plan, draft and publish imaginative, informative and persuasive texts, choosing and experimenting with text structures, language features, images and digital resources appropriate to purpose and audience<p>Creating informative texts for two different audiences, such as a visiting academic and a Level 3 class, that explore an aspect of biodiversity.</p><p>Using rhetorical devices, images, surprise techniques and juxtaposition of people and ideas and modal verbs and modal auxiliaries to enhance the persuasive nature of a text, recognising and exploiting audience susceptibilities.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY359','<p><strong>Content Description</strong></p><p>Reread and edit own and others'' work using agreed criteria and explaining editing choices.</p><p><strong>Elaboration</strong></p>Reread and edit own and others'' work using agreed criteria and explaining editing choices<p>Editing for coherence, sequence, effective choice of vocabulary, opening devices, dialogue and description, humour and pathos, as appropriate to the task and audience.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY360','<p><strong>Content Description</strong></p><p>Develop a handwriting style that is legible, fluent and that can vary depending on context.</p><p><strong>Elaboration</strong></p>Develop a handwriting style that is legible, fluent and that can vary depending on context<p>Using handwriting efficiently as a tool for a wide range of formal and informal text creation tasks.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY361','<p><strong>Content Description</strong></p><p>Use a range of software, including word processing programs, learning new functions as required to create texts.</p><p><strong>Elaboration</strong></p>Use a range of software, including word processing programs, learning new functions as required to create texts<p>Selecting and combining software functions as needed to create texts.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA380','<p><strong>Content Description</strong></p><p>Understand that the coherence of more complex texts relies on devices that signal text structure and guide readers, for example overviews, initial and concluding paragraphs and topic sentences, indexes or site maps or breadcrumb trails for online texts.</p><p><strong>Elaboration</strong></p>Understand that the coherence of more complex texts relies on devices that signal text structure and guide readers, for example overviews, initial and concluding paragraphs and topic sentences, indexes or site maps or breadcrumb trails for online texts<p>Analysing the structure of media texts such as television news items and broadcasts and various types of newspaper and magazine articles.</p><p>Writing structured paragraphs for use in a range of academic settings such as paragraph responses, reports and presentations.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA381','<p><strong>Content Description</strong></p><p>Understand the use of punctuation to support meaning in complex sentences with prepositional phrases and embedded clauses.</p><p><strong>Elaboration</strong></p>Understand the use of punctuation to support meaning in complex sentences with prepositional phrases and embedded clauses<p>Discussing how qualifying statements add meaning to opinions and views in spoken texts.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA382','<p><strong>Content Description</strong></p><p>Recognise and understand that subordinate clauses embedded within noun groups/phrases are a common feature of written sentence structures and increase the density of information.</p><p><strong>Elaboration</strong></p>Recognise and understand that subordinate clauses embedded within noun groups/phrases are a common feature of written sentence structures and increase the density of information<p>Identifying and experimenting with a range of clause types and discussing the effect of these in the expression and development of ideas.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA383','<p><strong>Content Description</strong></p><p>Understand how modality is achieved through discriminating choices in modal verbs, adverbs, adjectives and nouns.</p><p><strong>Elaboration</strong></p>Understand how modality is achieved through discriminating choices in modal verbs, adverbs, adjectives and nouns<p>Observing and discussing how a sense of certainty, probability and obligation is created in texts.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELA384','<p><strong>Content Description</strong></p><p>Understand how to use spelling rules and word origins to learn new words and how to spell them.</p><p><strong>Elaboration</strong></p>Understand how to use spelling rules and word origins to learn new words and how to spell them<p>Using Greek and Latin roots, base words, suffixes, prefixes, spelling patterns and generalisations.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELT386','<p><strong>Content Description</strong></p><p>Create literary texts that adapt stylistic features encountered in other texts.</p><p><strong>Elaboration</strong></p>Create literary texts that adapt stylistic features encountered in other texts<p>Using aspects of texts in imaginative recreations such as re-situating a character from a text in a new situation.</p><p>Imagining a character''s life events (for example misadventures organised retrospectively to be presented as a series of flashbacks in scripted monologue supported by single images), making a sequel or prequel or rewriting an ending.</p><p>Creating chapters for an autobiography, short story or diary.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELT385','<p><strong>Content Description</strong></p><p>Experiment with text structures and language features and their effects in creating literary texts.</p><p><strong>Elaboration</strong></p>Experiment with text structures and language features and their effects in creating literary texts<p>Experimenting with different narrative structures such as the epistolary form, flashback, multiple perspectives.</p><p>Transforming familiar print narratives into short video or film narratives, drawing on knowledge of the type of text and possible adaptations necessary to a new mode.</p><p>Drawing on literature and life experiences to create a poem, for example ballad, series of haiku.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY387','<p><strong>Content Description</strong></p><p>Plan, draft and publish imaginative, informative and persuasive texts, selecting aspects of subject matter and particular language, visual, and audio features to convey information and ideas to a specific audience.</p><p><strong>Elaboration</strong></p>Plan, draft and publish imaginative, informative and persuasive texts, selecting aspects of subject matter and particular language, visual, and audio features to convey information and ideas to a specific audience<p>Compiling a portfolio of texts in a range of modes related to a particular concept, purpose or audience, for example a class anthology of poems or stories.</p><p>Using appropriate textual conventions, create scripts for interviews, presentations, advertisements and radio segments.</p><p>Writing and delivering presentations with specific rhetorical devices to engage an audience.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY388','<p><strong>Content Description</strong></p><p>Edit for meaning by removing repetition, refining ideas, reordering sentences and adding or substituting words for impact.</p><p><strong>Elaboration</strong></p>Edit for meaning by removing repetition, refining ideas, reordering sentences and adding or substituting words for impact<p>Using collaborative technologies to jointly construct and edit texts.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY389','<p><strong>Content Description</strong></p><p>Consolidate a personal handwriting style that is legible, fluent and automatic and supports writing for extended periods.</p><p><strong>Elaboration</strong></p>Consolidate a personal handwriting style that is legible, fluent and automatic and supports writing for extended periods<p>Using handwriting regularly, attending to feedback about legibility.</p>');
INSERT INTO local_criterias(curriculum_code,description_elaboration) VALUES ('VCELY390','<p><strong>Content Description</strong></p><p>Use a range of software, including word processing programs, to create, edit and publish written and multimodal texts.</p><p><strong>Elaboration</strong></p>Use a range of software, including word processing programs, to create, edit and publish written and multimodal texts<p>Understanding conventions associated with particular kinds of software and using them appropriately, for example synthesising information and ideas in dot points and sequencing information in presentations or timing scenes in animation.</p>');
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (30,119);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (26,119);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (15,119);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (8,119);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (23,119);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (31,119);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (32,119);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (11,121);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (30,121);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (26,121);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (2,121);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (1,121);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (19,121);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (15,121);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (5,121);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (18,121);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (8,121);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (23,121);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (7,121);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (14,121);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (31,121);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (25,121);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (34,121);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (9,121);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (32,121);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (11,125);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (30,125);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (12,125);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (13,125);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (26,125);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (2,125);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (1,125);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (15,125);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (18,125);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (8,125);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (10,125);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (29,125);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (23,125);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (6,125);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (7,125);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (14,125);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (33,125);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (22,125);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (31,125);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (25,125);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (34,125);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (9,125);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (24,125);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (32,125);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (11,129);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (30,129);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (12,129);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (13,129);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (26,129);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (2,129);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (1,129);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (15,129);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (4,129);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (18,129);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (21,129);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (8,129);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (10,129);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (29,129);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (20,129);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (23,129);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (6,129);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (3,129);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (7,129);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (27,129);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (14,129);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (22,129);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (31,129);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (25,129);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (34,129);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (9,129);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (24,129);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (16,129);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (35,129);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (32,129);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (11,133);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (30,133);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (12,133);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (13,133);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (26,133);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (2,133);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (1,133);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (15,133);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (18,133);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (21,133);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (8,133);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (10,133);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (29,133);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (20,133);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (23,133);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (6,133);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (3,133);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (7,133);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (27,133);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (14,133);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (22,133);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (31,133);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (25,133);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (34,133);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (9,133);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (24,133);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (28,133);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (16,133);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (35,133);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (32,133);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (11,137);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (12,137);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (13,137);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (26,137);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (2,137);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (1,137);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (15,137);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (18,137);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (21,137);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (8,137);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (10,137);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (29,137);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (20,137);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (23,137);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (6,137);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (3,137);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (7,137);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (27,137);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (14,137);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (22,137);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (31,137);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (25,137);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (34,137);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (9,137);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (24,137);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (28,137);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (16,137);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (35,137);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (32,137);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (11,141);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (12,141);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (26,141);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (2,141);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (1,141);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (17,141);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (15,141);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (21,141);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (10,141);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (29,141);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (20,141);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (23,141);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (6,141);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (3,141);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (7,141);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (27,141);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (14,141);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (22,141);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (31,141);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (25,141);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (34,141);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (9,141);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (28,141);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (16,141);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (35,141);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (32,141);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (11,145);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (12,145);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (26,145);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (2,145);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (1,145);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (17,145);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (15,145);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (4,145);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (21,145);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (10,145);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (20,145);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (23,145);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (6,145);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (3,145);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (7,145);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (14,145);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (22,145);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (31,145);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (34,145);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (9,145);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (28,145);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (16,145);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (35,145);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (32,145);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (11,149);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (12,149);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (26,149);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (2,149);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (1,149);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (17,149);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (15,149);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (21,149);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (20,149);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (23,149);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (6,149);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (3,149);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (7,149);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (31,149);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (9,149);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (28,149);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (16,149);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (35,149);
INSERT INTO skills_levels(skills_levels_skills_skill_Id,scriibi_levels_scriibi_Level_Id) VALUES (32,149);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (1,1);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (2,2);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (3,3);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (4,4);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (5,5);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (6,6);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (7,7);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (8,8);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (9,9);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (10,10);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (11,11);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (12,12);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (13,13);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (14,14);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (15,15);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (16,16);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (17,17);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (18,18);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (19,19);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (20,20);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (21,21);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (22,22);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (23,23);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (24,24);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (25,25);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (26,26);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (27,27);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (28,28);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (29,29);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (30,30);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (31,31);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (32,32);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (33,33);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (34,34);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (35,35);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (36,36);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (37,37);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (38,38);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (39,39);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (40,40);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (41,41);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (42,42);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (43,43);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (44,44);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (45,45);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (46,46);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (47,47);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (48,48);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (49,49);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (50,50);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (51,51);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (52,52);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (53,53);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (54,54);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (55,55);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (56,56);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (57,57);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (58,58);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (59,59);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (60,60);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (61,61);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (62,62);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (63,63);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (64,64);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (65,65);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (66,66);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (67,67);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (68,68);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (69,69);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (70,70);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (71,71);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (72,72);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (73,73);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (74,74);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (75,75);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (76,76);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (77,77);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (78,78);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (79,79);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (80,80);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (81,81);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (82,82);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (83,83);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (84,84);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (85,85);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (86,86);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (87,87);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (88,88);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (89,89);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (90,90);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (91,91);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (92,92);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (93,93);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (94,94);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (95,95);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (96,96);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (97,97);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (98,98);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (99,99);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (100,100);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (101,101);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (102,102);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (103,103);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (104,104);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (105,105);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (106,106);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (107,107);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (108,108);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (109,109);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (110,110);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (111,111);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (112,112);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (113,113);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (114,114);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (115,115);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (116,116);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (117,117);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (118,118);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (119,119);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (120,120);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (121,121);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (122,122);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (123,123);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (124,124);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (125,125);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (126,126);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (127,127);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (128,128);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (129,129);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (130,130);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (131,131);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (132,132);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (133,133);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (134,134);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (135,135);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (136,136);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (137,137);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (138,138);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (139,139);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (140,140);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (141,141);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (142,142);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (143,143);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (144,144);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (145,145);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (146,146);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (147,147);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (148,148);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (149,149);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (150,150);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (151,151);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (152,152);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (153,153);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (154,154);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (155,155);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (156,156);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (157,157);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (158,158);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (159,159);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (160,160);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (161,161);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (162,162);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (163,163);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (164,164);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (165,165);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (166,166);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (167,167);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (168,168);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (169,169);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (170,170);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (171,171);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (172,172);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (173,173);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (174,174);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (175,175);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (176,176);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (177,177);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (178,178);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (179,179);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (180,180);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (181,181);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (182,182);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (183,183);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (184,184);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (185,185);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (186,186);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (187,187);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (188,188);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (189,189);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (190,190);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (191,191);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (192,192);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (193,193);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (194,194);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (195,195);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (196,196);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (197,197);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (198,198);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (199,199);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (200,200);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (201,201);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (202,202);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (203,203);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (204,204);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (205,205);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (206,206);
INSERT INTO skills_levels_global_criterias(skills_levels_Id,global_criteria_Id) VALUES (207,207);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,1,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,2,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,3,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,4,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,5,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,6,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,7,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,8,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,9,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,10,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,11,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,12,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,13,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,14,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,15,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,16,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,17,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,18,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,19,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,20,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,21,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,22,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,23,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,24,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,25,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,26,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,27,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,28,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,29,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,30,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,31,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,32,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,33,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,34,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,35,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,1,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,2,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,3,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,4,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,5,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,6,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,7,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,8,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,9,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,10,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,11,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,12,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,13,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,14,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,15,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,16,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,17,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,18,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,19,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,20,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,21,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,22,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,23,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,24,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,25,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,26,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,27,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,28,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,29,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,30,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,31,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,32,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,33,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,34,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,35,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,1,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,2,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,3,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,4,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,5,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,6,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,7,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,8,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,9,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,10,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,11,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,12,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,13,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,14,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,15,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,16,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,17,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,18,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,19,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,20,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,21,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,22,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,23,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,24,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,25,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,26,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,27,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,28,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,29,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,30,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,31,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,32,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,33,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,34,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,35,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,1,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,2,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,3,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,4,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,5,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,6,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,7,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,8,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,9,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,10,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,11,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,12,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,13,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,14,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,15,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,16,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,17,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,18,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,19,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,20,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,21,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,22,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,23,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,24,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,25,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,26,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,27,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,28,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,29,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,30,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,31,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,32,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,33,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,34,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,35,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,1,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,2,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,3,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,4,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,5,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,6,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,7,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,8,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,9,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,10,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,11,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,12,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,13,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,14,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,15,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,16,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,17,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,18,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,19,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,20,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,21,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,22,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,23,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,24,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,25,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,26,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,27,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,28,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,29,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,30,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,31,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,32,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,33,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,34,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,35,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,1,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,2,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,3,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,4,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,5,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,6,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,7,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,8,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,9,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,10,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,11,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,12,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,13,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,14,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,15,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,16,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,17,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,18,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,19,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,20,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,21,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,22,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,23,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,24,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,25,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,26,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,27,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,28,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,29,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,30,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,31,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,32,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,33,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,34,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,35,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,1,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,2,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,3,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,4,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,5,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,6,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,7,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,8,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,9,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,10,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,11,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,12,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,13,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,14,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,15,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,16,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,17,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,18,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,19,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,20,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,21,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,22,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,23,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,24,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,25,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,26,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,27,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,28,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,29,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,30,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,31,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,32,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,33,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,34,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,35,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,1,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,2,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,3,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,4,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,5,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,6,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,7,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,8,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,9,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,10,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,11,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,12,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,13,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,14,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,15,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,16,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,17,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,18,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,19,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,20,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,21,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,22,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,23,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,24,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,25,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,26,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,27,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,28,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,29,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,30,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,31,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,32,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,33,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,34,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,35,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,1,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,2,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,3,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,4,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,5,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,6,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,7,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,8,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,9,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,10,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,11,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,12,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,13,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,14,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,15,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,16,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,17,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,18,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,19,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,20,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,21,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,22,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,23,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,24,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,25,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,26,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,27,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,28,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,29,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,30,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,31,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,32,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,33,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,34,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,35,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,1,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,2,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,3,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,4,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,5,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,6,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,7,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,8,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,9,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,10,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,11,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,12,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,13,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,14,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,15,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,16,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,17,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,18,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,19,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,20,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,21,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,22,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,23,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,24,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,25,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,26,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,27,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,28,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,29,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,30,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,31,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,32,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,33,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,34,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,35,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,1,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,2,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,3,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,4,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,5,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,6,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,7,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,8,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,9,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,10,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,11,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,12,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,13,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,14,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,15,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,16,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,17,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,18,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,19,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,20,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,21,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,22,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,23,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,24,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,25,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,26,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,27,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,28,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,29,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,30,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,31,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,32,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,33,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,34,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,35,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,1,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,2,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,3,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,4,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,5,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,6,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,7,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,8,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,9,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,10,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,11,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,12,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,13,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,14,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,15,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,16,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,17,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,18,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,19,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,20,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,21,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,22,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,23,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,24,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,25,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,26,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,27,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,28,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,29,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,30,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,31,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,32,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,33,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,34,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (1,35,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,1,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,2,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,3,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,4,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,5,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,6,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,7,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,8,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,9,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,10,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,11,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,12,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,13,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,14,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,15,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,16,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,17,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,18,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,19,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,20,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,21,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,22,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,23,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,24,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,25,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,26,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,27,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,28,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,29,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,30,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,31,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,32,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,33,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,34,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,35,119);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,1,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,2,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,3,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,4,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,5,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,6,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,7,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,8,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,9,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,10,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,11,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,12,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,13,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,14,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,15,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,16,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,17,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,18,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,19,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,20,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,21,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,22,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,23,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,24,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,25,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,26,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,27,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,28,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,29,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,30,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,31,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,32,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,33,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,34,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,35,121);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,1,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,2,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,3,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,4,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,5,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,6,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,7,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,8,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,9,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,10,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,11,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,12,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,13,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,14,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,15,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,16,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,17,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,18,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,19,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,20,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,21,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,22,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,23,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,24,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,25,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,26,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,27,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,28,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,29,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,30,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,31,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,32,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,33,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,34,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,35,125);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,1,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,2,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,3,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,4,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,5,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,6,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,7,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,8,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,9,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,10,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,11,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,12,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,13,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,14,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,15,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,16,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,17,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,18,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,19,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,20,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,21,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,22,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,23,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,24,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,25,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,26,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,27,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,28,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,29,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,30,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,31,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,32,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,33,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,34,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,35,129);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,1,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,2,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,3,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,4,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,5,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,6,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,7,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,8,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,9,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,10,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,11,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,12,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,13,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,14,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,15,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,16,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,17,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,18,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,19,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,20,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,21,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,22,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,23,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,24,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,25,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,26,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,27,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,28,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,29,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,30,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,31,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,32,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,33,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,34,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,35,133);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,1,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,2,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,3,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,4,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,5,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,6,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,7,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,8,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,9,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,10,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,11,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,12,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,13,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,14,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,15,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,16,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,17,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,18,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,19,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,20,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,21,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,22,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,23,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,24,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,25,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,26,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,27,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,28,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,29,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,30,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,31,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,32,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,33,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,34,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,35,137);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,1,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,2,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,3,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,4,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,5,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,6,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,7,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,8,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,9,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,10,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,11,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,12,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,13,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,14,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,15,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,16,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,17,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,18,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,19,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,20,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,21,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,22,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,23,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,24,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,25,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,26,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,27,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,28,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,29,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,30,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,31,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,32,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,33,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,34,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,35,141);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,1,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,2,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,3,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,4,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,5,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,6,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,7,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,8,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,9,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,10,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,11,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,12,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,13,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,14,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,15,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,16,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,17,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,18,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,19,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,20,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,21,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,22,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,23,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,24,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,25,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,26,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,27,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,28,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,29,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,30,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,31,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,32,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,33,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,34,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,35,145);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,1,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,2,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,3,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,4,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,5,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,6,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,7,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,8,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,9,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,10,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,11,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,12,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,13,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,14,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,15,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,16,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,17,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,18,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,19,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,20,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,21,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,22,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,23,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,24,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,25,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,26,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,27,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,28,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,29,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,30,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,31,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,32,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,33,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,34,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,35,149);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,1,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,2,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,3,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,4,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,5,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,6,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,7,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,8,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,9,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,10,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,11,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,12,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,13,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,14,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,15,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,16,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,17,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,18,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,19,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,20,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,21,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,22,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,23,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,24,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,25,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,26,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,27,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,28,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,29,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,30,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,31,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,32,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,33,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,34,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,35,153);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,1,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,2,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,3,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,4,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,5,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,6,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,7,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,8,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,9,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,10,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,11,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,12,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,13,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,14,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,15,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,16,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,17,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,18,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,19,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,20,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,21,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,22,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,23,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,24,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,25,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,26,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,27,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,28,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,29,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,30,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,31,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,32,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,33,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,34,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,35,157);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,1,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,2,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,3,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,4,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,5,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,6,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,7,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,8,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,9,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,10,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,11,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,12,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,13,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,14,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,15,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,16,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,17,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,18,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,19,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,20,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,21,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,22,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,23,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,24,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,25,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,26,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,27,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,28,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,29,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,30,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,31,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,32,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,33,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,34,161);
INSERT INTO curriculum_scriibi_level_skills(curriculum_Id,skill_Id,scriibi_level_Id) VALUES (2,35,161);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (1,471);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (2,474);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (3,478);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (4,460);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (5,464);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (6,471);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (7,471);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (8,489);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (9,487);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (10,487);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (11,487);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (12,487);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (13,469);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (14,487);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (15,487);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (16,480);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (17,480);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (18,462);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (19,481);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (20,470);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (21,486);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (22,514);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (23,523);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (24,513);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (25,506);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (26,499);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (27,512);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (28,524);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (29,522);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (30,522);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (31,522);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (32,522);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (33,504);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (34,522);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (35,522);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (36,515);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (37,492);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (38,497);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (39,516);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (40,505);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (41,521);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (42,529);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (43,528);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (44,548);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (45,541);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (46,534);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (47,539);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (48,527);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (49,559);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (50,557);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (51,557);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (52,557);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (53,557);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (54,557);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (55,557);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (56,556);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (57,527);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (58,532);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (59,551);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (60,540);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (61,556);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (62,581);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (63,574);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (64,591);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (65,574);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (66,574);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (67,584);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (68,594);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (69,592);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (70,592);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (71,592);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (72,592);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (73,567);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (74,567);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (75,567);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (76,586);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (77,575);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (78,591);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (79,611);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (80,598);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (81,611);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (82,626);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (83,604);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (84,605);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (85,626);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (86,629);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (87,627);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (88,627);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (89,627);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (90,602);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (91,602);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (92,602);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (93,621);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (94,610);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (95,626);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (96,657);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (97,644);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (98,639);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (99,640);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (100,661);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (101,664);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (102,662);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (103,644);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (104,662);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (105,637);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (106,642);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (107,637);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (108,656);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (109,645);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (110,661);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (111,681);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (112,668);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (113,688);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (114,675);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (115,675);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (116,681);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (117,699);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (118,697);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (119,697);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (120,672);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (121,681);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (122,672);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (123,691);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (124,680);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (125,696);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (126,716);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (127,703);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (128,723);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (129,709);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (130,717);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (131,707);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (132,716);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (133,707);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (134,726);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (135,731);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (136,15);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (137,23);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (138,32);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (139,32);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (140,30);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (141,26);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (142,15);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (143,31);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (144,54);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (145,58);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (146,67);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (147,67);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (148,60);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (149,42);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (150,61);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (151,50);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (152,66);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (153,103);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (154,93);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (155,84);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (156,102);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (157,77);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (158,77);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (159,77);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (160,96);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (161,85);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (162,101);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (163,108);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (164,128);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (165,137);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (166,137);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (167,136);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (168,112);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (169,112);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (170,131);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (171,120);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (172,112);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (173,161);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (174,154);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (175,154);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (176,154);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (177,172);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (178,153);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (179,156);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (180,147);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (181,166);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (182,155);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (183,171);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (184,181);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (185,191);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (186,184);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (187,209);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (188,207);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (189,207);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (190,207);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (191,182);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (192,182);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (193,182);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (194,201);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (195,190);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (196,206);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (197,237);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (198,224);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (199,219);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (200,220);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (201,232);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (202,242);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (203,217);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (204,222);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (205,217);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (206,236);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (207,225);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (208,241);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (209,248);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (210,268);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (211,254);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (212,255);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (213,279);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (214,277);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (215,277);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (216,252);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (217,261);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (218,249);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (219,252);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (220,271);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (221,260);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (222,260);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (223,283);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (224,303);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (225,289);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (226,297);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (227,312);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (228,296);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (229,296);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (230,287);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (231,306);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (232,295);
INSERT INTO local_criteria_curriculum_scriibi_level_skills(local_criteria_Id,curriculum_scriibi_levels_skills_Id) VALUES (233,311);
INSERT INTO student_definitions(description) VALUES ('The ending tells how the problem was solved.');
INSERT INTO student_definitions(description) VALUES ('<strong>Events and ideas are written in order</strong> which makes it is easy to understand and retell.');
INSERT INTO student_definitions(description) VALUES ('The writing describes what characters <strong>look like</strong> on the outside (face, hair, body, clothes), their <strong>traits</strong> (mean, kind) and their <strong>feelings</strong> (happy, grumpy, friendly).

&nbsp;');
INSERT INTO student_definitions(description) VALUES ('The first sentences tells the reader <strong>who</strong> it is about, <strong>where</strong> and <strong>what</strong> happened.
<ul>
 	<li>For example, <em>On the <strong>weekend</strong>, <strong>I </strong></em><em>went to the </em><strong><em>park</em></strong> <em>with my </em><strong><em>family</em></strong><em>.  We had a </em><strong><em>picnic</em></strong><em>. </em></li>
</ul>');
INSERT INTO student_definitions(description) VALUES ('The <strong>main idea</strong> or <strong>topic</strong> is clear to the reader. There are some interesting details that support the main idea.');
INSERT INTO student_definitions(description) VALUES ('<strong>Some ideas have extra sentences about the topic </strong>to give the reader more information.');
INSERT INTO student_definitions(description) VALUES ('People and places are described with detail and this helps the reader make clear mental images.

The writer uses <strong>adjectives</strong> (e.g. red, blue, large, tiny, round, long, beautiful, pretty) and/or the <strong>five senses</strong> (see, hear, smell, taste, and feel) to describe people and places.');
INSERT INTO student_definitions(description) VALUES ('Words and sentences are linked with <strong>connectives</strong> (and, because, then).');
INSERT INTO student_definitions(description) VALUES ('<h6><strong>[I will leave content, despite redundancy of level 1 goals for now]</strong></h6>
Read each sentence out loud.  As you read, point to each word.  If a word sounds wrong, change it.
<h3><em>We taked Milo to puppy school.            We took Milo to puppy school. </em></h3>');
INSERT INTO student_definitions(description) VALUES ('Writing has some <strong>specific naming words </strong>(nouns) and <strong>action words </strong>(verbs).');
INSERT INTO student_definitions(description) VALUES ('<h6><strong>[I will leave content, despite redundancy of level 1 goals for now]</strong></h6>
Interesting words are used to describe people, places and things.  (The <span style="text-decoration: underline">gigantic</span> man <span style="text-decoration: underline">tumbled</span> out of bed).');
INSERT INTO student_definitions(description) VALUES ('The ending includes a resolution and is interesting and enjoyable to read.');
INSERT INTO student_definitions(description) VALUES ('<strong>Events are in order </strong>(sequenced) and there is a clear beginning, middle and end.  Time connectives sequence events and ideas.  For example -  <em>Arter </em>breakfast, we drove to the farm.');
INSERT INTO student_definitions(description) VALUES ('People, places or things are described using figurative language such as <strong>similes</strong>, <strong>hyperbole</strong>, and <strong>onomatopoeia</strong> (sounds).

&nbsp;');
INSERT INTO student_definitions(description) VALUES ('The main idea is clear and interesting to the reader.');
INSERT INTO student_definitions(description) VALUES ('The writer has reread the text to check for spelling, punctuation (.,!!:;), capital letters and grammar.  They have also responded to feedback from others and made changes to improve the text.');
INSERT INTO student_definitions(description) VALUES ('Character''s <strong>appearance</strong> (the way they look) and their <b>actions </b>(what they do) are described with lots of detail.');
INSERT INTO student_definitions(description) VALUES ('The beginning states <strong>who</strong> it is about and <strong>what </strong>is happening.  It includes some setting details (<strong>where</strong> it is set, <strong>when</strong> it happened, and <strong>why</strong>).');
INSERT INTO student_definitions(description) VALUES ('The main idea or <strong>topic</strong> is clear to the reader. Interesting and <strong>relevant</strong> <strong>details</strong> support the main idea/topic.');
INSERT INTO student_definitions(description) VALUES ('Writing is separated into <strong>paragraphs</strong> to make it easy to follow and read.');
INSERT INTO student_definitions(description) VALUES ('<strong>Ideas</strong> have <strong>extra details</strong> to give the reader more information.');
INSERT INTO student_definitions(description) VALUES ('People, places, and actions are described using <strong>adjectives</strong>, <strong>action words</strong> (verbs) and the <strong>five senses</strong> (see, hear, smell, feels, taste).

&nbsp;

&nbsp;

&nbsp;');
INSERT INTO student_definitions(description) VALUES ('The writing has both <strong>long</strong> and <strong>short</strong> <strong>sentences</strong>. This makes it interesting and easy to read aloud.');
INSERT INTO student_definitions(description) VALUES ('There is more descriptive detail in the middle of the text (problem).  The introduction and ending are shorter.');
INSERT INTO student_definitions(description) VALUES ('Sentences begin with a capital letter and end with a full stop.  Proper nouns such as people''s names, places, and titles are capitalised.   Other types of punctuation  (? ! , " ") are evident in the text and enhance meaning.');
INSERT INTO student_definitions(description) VALUES ('<strong>Connectives</strong> link words and sentences (later, then, next, after that, and, so).');
INSERT INTO student_definitions(description) VALUES ('tbc');
INSERT INTO student_definitions(description) VALUES ('Sentences start in different ways (On, At, Later, Then, While, After, Because, He, She, people''s names)');
INSERT INTO student_definitions(description) VALUES ('Uses ''a, an, the'' and ''adjectives'' correctly to expand noun phrases/sentences.  (<em>I ate <strong>a big</strong> <strong>red</strong> apple.  <strong>The</strong> <strong>huge</strong> tree swayed in the wind. </em>

&nbsp;');
INSERT INTO student_definitions(description) VALUES ('Writing has some <strong>precise nouns </strong>and <strong>verbs </strong>to paint a clear picture in the reader''s mind.');
INSERT INTO student_definitions(description) VALUES ('The summary has sequenced events and contains information on the setting, characters, conflicts and a resolutions.

&nbsp;

&nbsp;');
INSERT INTO student_definitions(description) VALUES ('Interesting and topic specific words are used to describe people, places and things.  (The volcano <span style="text-decoration: underline">erupted</span> with a roar).

&nbsp;');
INSERT INTO student_definitions(description) VALUES ('<strong>The writing has both simple and compound sentences</strong>, which makes the writing flow.  A compound sentence has more than one idea and is connected with a conjunction (and, but, so, or, yet).

&nbsp;');
INSERT INTO student_definitions(description) VALUES ('The ending resolves the problem or sums up the main points in an interesting and enjoyable way.');
INSERT INTO student_definitions(description) VALUES ('<strong>Information is sequenced logically</strong>.  Time and location connectives help sentences and ideas flow, and make the piece easy to read and understand.');
INSERT INTO student_definitions(description) VALUES ('People, places or things are described using figurative language (original similes, metaphors, hyperbole, alliteration, personification).');
INSERT INTO student_definitions(description) VALUES ('<strong>The main idea and supporting ideas are interesting and original</strong>.  Ideas are found easily from personal experience, observations, inspiration from books, movies, social media, games, and the author''s imagination.');
INSERT INTO student_definitions(description) VALUES ('<strong>The writing has been self and peer revised</strong> to improve ideas, check that it makes sense when read aloud and that its purpose is clear for the reader.  Text has been edited for spelling, punctuation and grammar.');
INSERT INTO student_definitions(description) VALUES ('Character''s <strong>physical</strong> features, <strong>personality</strong> traits (generous, coward, brave) and <strong>thoughts</strong> are described with detail.

&nbsp;');
INSERT INTO student_definitions(description) VALUES ('The beginning hooks the reader with an <strong>interesting first line</strong>.  It includes <strong>setting</strong> and <strong>character</strong> details.

&nbsp;

&nbsp;

&nbsp;');
INSERT INTO student_definitions(description) VALUES ('The <strong>topic is narrow</strong> and supported with <strong>relevant details</strong>.

&nbsp;');
INSERT INTO student_definitions(description) VALUES ('Writing is organised into <strong>paragraphs</strong> to make it easy to follow and read.');
INSERT INTO student_definitions(description) VALUES ('<strong>Ideas</strong> are supported with <strong>relevant</strong> and <strong>interesting</strong> details.

&nbsp;');
INSERT INTO student_definitions(description) VALUES ('People, places, and actions are described using <strong>adjectives</strong>, <strong>precise verbs/</strong><strong>nouns</strong> (<em>horrendous instead of bad</em>) the <strong>five senses</strong> (see, hear, smell, feels like, taste) and <strong>Show don''t Tell</strong>.

&nbsp;');
INSERT INTO student_definitions(description) VALUES ('<strong>Long</strong> and <strong>short</strong> <strong>sentences</strong> enhance fluency and make it easy to read aloud.  Some short sentences are used for effect (Wow!).');
INSERT INTO student_definitions(description) VALUES ('There is more descriptive detail (Show don''t tell) in the middle part of the text (problem) to build up the tension.  The introduction and ending are shorter.');
INSERT INTO student_definitions(description) VALUES ('Full stops, capital letters, question marks, commas, and exclamation marks are mostly used correctly.  Other types of punctuation  (''... " ") are used occasionally and enhance meaning.');
INSERT INTO student_definitions(description) VALUES ('A range of<strong> connectives</strong> links words and sentences and makes the writing flow (later, then, next, after that, and, so).');
INSERT INTO student_definitions(description) VALUES ('tbc');
INSERT INTO student_definitions(description) VALUES ('Sentences start in different ways (proper nouns, adjectives, conjunctions)');
INSERT INTO student_definitions(description) VALUES ('Apostrophes are used to show possession of a singular noun.  (The cat''s toy.  Mum''s car).
<h2 style="text-align: center"></h2>');
INSERT INTO student_definitions(description) VALUES ('Writing has <strong>precise nouns </strong>and <strong>verbs </strong>to paint a clear picture in the reader''s mind.  <strong>Topic specific</strong> words are used to enhance meaning (e.g. herd of sheep, instead of lots of sheep).');
INSERT INTO student_definitions(description) VALUES ('Fiction text summary includes information on characters, setting, conflicts and resolutions.  Non-fiction text summary restates the main idea and supporting details.');
INSERT INTO student_definitions(description) VALUES ('Interesting and topic specific words are used to describe people, places and things.  (The volcano <span style="text-decoration: underline">erupted</span> with a roar).');
INSERT INTO student_definitions(description) VALUES ('<strong>Complex sentences</strong> make sentences interesting to read aloud and enhance the flow of the text.  A complex sentence has a dependent and independent clause.

&nbsp;');
INSERT INTO student_definitions(description) VALUES ('tbc');
INSERT INTO student_definitions(description) VALUES ('The ending resolves the problem or sums up the main points in an interesting and enjoyable way.');
INSERT INTO student_definitions(description) VALUES ('Figurative language is used to describe people, places or things in interesting and memorable ways (similes, metaphors, hyperbole, alliteration, personification, oxymorons).');
INSERT INTO student_definitions(description) VALUES ('<strong>The main idea and supporting ideas are interesting and original</strong>.  Ideas are found easily from a range of sources such as personal experience, observations, inspiration from books, movies, events, social media, games, or the author''s imagination.');
INSERT INTO student_definitions(description) VALUES ('The writing has been self/peer revised and edited to improve ideas, meaning, word choice and ensure the text structure fits with its purpose and audience.');
INSERT INTO student_definitions(description) VALUES ('Character''s <strong>physical</strong> features, <strong>personality</strong> traits (generous, coward, brave) and <strong>thoughts</strong> are described with detail.');
INSERT INTO student_definitions(description) VALUES ('The beginning hooks the reader.  It includes setting and/or character details.');
INSERT INTO student_definitions(description) VALUES ('The topic is <strong>narrow</strong>, <strong>interesting</strong> and supported with <strong>relevant details</strong>.');
INSERT INTO student_definitions(description) VALUES ('Writing is organised into <strong>paragraphs</strong> to make it easy to follow and read.  Information texts are organised with topic sentences and supporting details.');
INSERT INTO student_definitions(description) VALUES ('<strong>Ideas within sentences</strong> are developed with additional <strong>details</strong> and paint a clear picture in the reader’s mind.');
INSERT INTO student_definitions(description) VALUES ('People, places, and actions are described using <strong>adjectives</strong>, <strong>precise verbs/</strong><strong>nouns</strong> (<em>horrendous instead of bad</em>) the <strong>five senses</strong>, and <strong>Show don''t Tell</strong>.');
INSERT INTO student_definitions(description) VALUES ('<strong>Long</strong> and <strong>short</strong> <strong>sentences</strong> enhance fluency and make it easy to read aloud.  <strong>Interjections</strong> or <strong>short two word phrases</strong> are used for effect.');
INSERT INTO student_definitions(description) VALUES ('There is more detail added during important parts of the text (climatic point, the character is facing a problem).');
INSERT INTO student_definitions(description) VALUES ('Full stops, capital letters, question marks, commas, and exclamation marks are used correctly.  Other types of punctuation  (''... : " ") are correctly applied to writing to enhance meaning.');
INSERT INTO student_definitions(description) VALUES ('Writing has different types of <strong>connectives</strong> to link sentences and ideas (however, therefore, additionally, in summary).');
INSERT INTO student_definitions(description) VALUES ('tbc');
INSERT INTO student_definitions(description) VALUES ('Sentences start in different ways (proper nouns, verbs, adjectives, conjunctions)');
INSERT INTO student_definitions(description) VALUES ('<strong>Tenses</strong> are used correctly throughout the writing to show if events occur in the <strong>past</strong>, <strong>present</strong> or <strong>future</strong>. (John <em>ran</em> home, John <em>runs</em> home, John <em>will run</em> home).

Notice how several of the words in each sentence need to change.');
INSERT INTO student_definitions(description) VALUES ('Writing has precise <strong>nouns, </strong><strong>verbs </strong>and <strong>topic specific </strong>vocabulary to paint a clear picture in the reader''s mind.');
INSERT INTO student_definitions(description) VALUES ('<strong>Fiction text summary</strong> is concise and includes information on characters, setting, conflicts and resolutions.  <strong>Non-fiction</strong> <strong>text summary</strong> restates the main idea and supporting details, omitting small details.');
INSERT INTO student_definitions(description) VALUES ('The writing has a range of interesting and topic specific vocabulary that creates strong mental images in a reader''s mind.');
INSERT INTO student_definitions(description) VALUES ('Ideas are expressed using different types of sentences including <strong>prepositions</strong>, <strong>compound</strong> and <strong>complex</strong> sentences.');
INSERT INTO student_definitions(description) VALUES ('tbc');
INSERT INTO student_definitions(description) VALUES ('Make sure the main problem is resolved and then end with an interesting last line.');
INSERT INTO student_definitions(description) VALUES ('Figurative language is used creatively to describe people, places or things in interesting and memorable ways (similes, metaphors, hyperbole, alliteration, personification).');
INSERT INTO student_definitions(description) VALUES ('Writing is revised and edited to improve the sequence and organisation of ideas, meaning, word choice and sentence fluency using set criteria or a rubric.');
INSERT INTO student_definitions(description) VALUES ('Character''s <strong>physical</strong> features and <strong>personality</strong> are described with detail.  Their <strong>thoughts</strong> and <strong>emotions</strong> are revealed.
<ul>
 	<li style="list-style-type: none"></li>
</ul>');
INSERT INTO student_definitions(description) VALUES ('The beginning hooks the reader with vivid setting and/or character details and interesting words.');
INSERT INTO student_definitions(description) VALUES ('The writer has carefully selected a range of modal words to create a strong point of view and show degrees of certainty.  For example, ''I <em>might</em> get up early tomorrow.'' (low certainty/low modality).');
INSERT INTO student_definitions(description) VALUES ('Writing is organised into <strong>paragraphs</strong> when the Time, Topic, Place and Person speaking changes.  Information texts are organised with topic sentences and supporting details.');
INSERT INTO student_definitions(description) VALUES ('People, places, things, and ideas are described using <strong>adjectives</strong>, <strong>precise verbs/</strong><strong>nouns,</strong> the <strong>five senses</strong> and strategies such as <strong>Show don''t Tell,</strong> <strong>Rule of Three </strong>and<strong> Snapshot </strong>writing<strong>. </strong>');
INSERT INTO student_definitions(description) VALUES ('<strong>Long</strong> and <strong>short</strong> <strong>sentences</strong> enhance fluency and make it easy to read aloud.  <strong>Interjections</strong> or <strong>short two word phrases</strong> are used for effect.');
INSERT INTO student_definitions(description) VALUES ('There is just the right amount of detail for important parts of the text.  This helps to speed up or slow down events.');
INSERT INTO student_definitions(description) VALUES ('Writing uses a range of punctuation accurately to support meaning. Including: Full stops, capital letters, question marks, commas, exclamation marks, apostrophes, ellipses (...), colons ( : ), semicolons ( ; ), and talking marks.');
INSERT INTO student_definitions(description) VALUES ('Writing has a range of <strong>connectives</strong> for different purposes (however, therefore, whilst, yet, additionally, in summary).');
INSERT INTO student_definitions(description) VALUES ('tbc');
INSERT INTO student_definitions(description) VALUES ('Sentence beginnings are interesting, link ideas and start in different ways (proper nouns, verbs, adjectives, conjunctions).');
INSERT INTO student_definitions(description) VALUES ('Apostrophes are used to show possession of singular (The <strong>cat''s</strong> toy) and plural nouns (My <strong>parents''</strong> decision).');
INSERT INTO student_definitions(description) VALUES ('Writing has precise <strong>nouns, </strong><strong>verbs </strong>and <strong>topic specific </strong>vocabulary to paint a clear picture in the reader''s mind.');
INSERT INTO student_definitions(description) VALUES ('<strong>The summary is short and clearly restates all the relevant events/experiences using concise language</strong>.  The writer has substituted specific language and small details with general statements.  For example, ''koalas, kangaroos and kookaburras'',  becomes ''Australian animals''.');
INSERT INTO student_definitions(description) VALUES ('The vocabulary is interesting, varied and descriptive and suites the purpose and audience..  It enhances meaning and creates strong mental images in a reader''s mind.');
INSERT INTO student_definitions(description) VALUES ('<strong>The text contains many long and interesting complex</strong> <strong>sentences, </strong>which enhances meaning and helps connect ideas within and between sentences.  For example: <em>We made our way down the mountain <span style="text-decoration: underline">before</span> the sun had risen</em>.');
INSERT INTO student_definitions(description) VALUES ('tbc');
INSERT INTO student_definitions(description) VALUES ('The main problem is resolved in a satisfying way.  The last line is interesting and lingers in the reader''s mind.');
INSERT INTO student_definitions(description) VALUES ('Figurative language is used creatively to describe people, places or things in interesting and memorable ways (similes, metaphors, irony, idioms, hyperbole, alliteration, personification).');
INSERT INTO student_definitions(description) VALUES ('<strong>Writing is improved through self and peer revision, with changes appropriate to purpose and audience using set criteria or a rubric.</strong> Changes can include using connectives and pronouns to make writing more cohesive, sequencing ideas, vocabulary, and including figurative language.');
INSERT INTO student_definitions(description) VALUES ('Characters are interesting. Their physical features, emotions and motivations for their behaviour are described in detail.');
INSERT INTO student_definitions(description) VALUES ('The beginning hooks the reader with vivid setting and/or character details and interesting words.');
INSERT INTO student_definitions(description) VALUES ('The writer has expressed a strong point of view based on the choice of high, medium and low modality words. For example, ''We <em>must</em> care for elderly citizens.'' (high modality).

&nbsp;');
INSERT INTO student_definitions(description) VALUES ('Writing is organised into <strong>paragraphs</strong> when the Time, Topic, Location and Speaker changes.  Information texts are organised with topic sentences and supporting details.');
INSERT INTO student_definitions(description) VALUES ('Ideas are elaborated with rich details using <strong>adjectives, adverbs, precise verbs/nouns</strong>, <strong>sensory words</strong> and strategies such as <strong>Show don''t Tell, Rule of Three </strong>and<strong> Snapshot</strong> writing.');
INSERT INTO student_definitions(description) VALUES ('Pacing is well controlled with just the right amount of information and detail to speed up or slow down events.');
INSERT INTO student_definitions(description) VALUES ('The writing is punctuated accurately to support meaning: full stops, capital letters, question marks, exclamation marks, apostrophes, ellipses (...), colons ( : ), semicolons ( ; ), and talking marks.  Commas are used accurately to separate lists and clauses in sentences.');
INSERT INTO student_definitions(description) VALUES ('A range of <strong>connectives</strong> are used to smoothly link ideas and improve sentence fluency when reading aloud (however, therefore, whilst, for this reason, additionally, on the whole).');
INSERT INTO student_definitions(description) VALUES ('tbc');
INSERT INTO student_definitions(description) VALUES ('Apostrophes are used to show possession of singular (The <strong>cat''s</strong> toy) and plural nouns (My <strong>parents''</strong> decision).');
INSERT INTO student_definitions(description) VALUES ('Writing has precise <strong>nouns, </strong><strong>verbs </strong>and <strong>topic specific </strong>vocabulary to paint a clear picture in the reader''s mind.  The writing is concise and not too wordy.');
INSERT INTO student_definitions(description) VALUES ('The strong vocabulary expresses feelings and the writer''s opinion.  The right words enhance meaning and create strong mental images in a reader''s mind. E.g The

&nbsp;');
INSERT INTO student_definitions(description) VALUES ('<strong>Complex sentences are interesting and used in a variety of ways to elaborate and explain ideas. </strong>Examples: <em><span style="text-decoration: underline">Despite</span> my best efforts, I''m in the same person I was last year.  I think we can get to the finals, <span style="text-decoration: underline">provided</span> we train hard. </em>

&nbsp;

&nbsp;

&nbsp;

&nbsp;

&nbsp;');
INSERT INTO student_definitions(description) VALUES ('tbc');
INSERT INTO student_definitions(description) VALUES ('The ending ties up the events and is satisfying and strong.  It leaves the reader with a sense of resolution.');
INSERT INTO student_definitions(description) VALUES ('Figurative language is used in original and creative ways (similes, metaphors, irony, idioms, allusion, personification).');
INSERT INTO student_definitions(description) VALUES ('<strong>Writing is improved through self and peer revision, with changes appropriate to purpose and audience using set criteria or a rubric.</strong> Changes can include removing repetition, reordering sentences, adding or changing words for impact, and using literary devices.');
INSERT INTO student_definitions(description) VALUES ('Characters have distinct physical and personality traits. which makes them interesting.  Their backstory, connection to other characters and motivations make them feel real and readers'' can empathise or make connections with some characters.');
INSERT INTO student_definitions(description) VALUES ('The beginning hooks the reader with vivid setting and/or character details and interesting words.');
INSERT INTO student_definitions(description) VALUES ('<strong>The writer has expressed a strong point of view based on their choice of high, medium and low modality words.</strong> For example, ''We <i>should </i>care for elderly citizens'' (high modality).  ''We <em>could</em> try care for elderly citizens'' (low modality).');
INSERT INTO student_definitions(description) VALUES ('Writing is organised into <strong>paragraphs</strong> appropriate to the text type and includes opening and concluding paragraphs.');
INSERT INTO student_definitions(description) VALUES ('Pacing is well controlled with just the right amount of information and detail to speed up or slow down events.');
INSERT INTO student_definitions(description) VALUES ('Punctuation is used correctly for different types of sentences.  Some punctuation is used creatively to enhance meaning and the tone of the piece.  For example, hyphens ( - ) and ellipses (...).');
INSERT INTO student_definitions(description) VALUES ('A range of interesting <strong>connectives</strong> and <strong>phrases</strong> are used to link ideas smoothly and help the writing flow (however, therefore, whilst, for this reason, additionally, on the whole).');
INSERT INTO student_definitions(description) VALUES ('tbc');
INSERT INTO student_definitions(description) VALUES ('<strong>A range of sentence types </strong>(complex, compound, prepositional phrases, fragments, punctuation) <strong>enhances readability and helps to develop and elaborate ideas in interesting and creative ways</strong>.

For example: "<em>It was one of those March days when the sun shines hot and the wind blows cold: when it is summer in the light, and winter in the shade.</em>" - Charles Dickens.

&nbsp;

&nbsp;

&nbsp;

&nbsp;');
INSERT INTO student_definitions(description) VALUES ('tbc');
INSERT INTO strategies(strategy_Desc) VALUES ('<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" /></span>  Somebody Wanted But So Then:</strong> To help you write your ending, retell your story using the <em>Somebody, Wanted, but, So, Then</em> strategy.

To help you do this, answer the questions under each heading.  See the Three Little Pigs example.

&nbsp;

<img class="alignleft" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Retelling%20and%20Summarising/SWBS.png" width="50%"  />

<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" /> Sentence Starters for Endings:</span></strong>

Finally...

So...

Luckily...

In the end...

They learned to...

They all lived happily ever after...

They felt...

It was the best...

It was the worst...

I hope...

Everyone...

At last...

At the end of the day...

At the end of the night...

We all...

&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('Draw your characters and label what they <strong>look</strong> like, their <strong>traits</strong> and how they <strong>feel</strong>.
<table>
<tbody>
<tr>
<td width="48%"><img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Character%20Development/Level%201%20old%20man.png" width="60%"  /></td>
<td width="4%"></td>
<td valign="top" width="48%"><img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Character%20Development/Level%201%20friendly%20monster.png" width="60%"  /></td>
</tr>
</tbody>
</table>');
INSERT INTO strategies(strategy_Desc) VALUES ('<h4><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" /></span></strong><span style="color: #000000"> </span>Include <span style="color: #339966"><span style="color: #ff6600">Who?</span> </span><span style="color: #ff00ff">What? </span> <span style="color: #ff00ff"><span style="color: #339966">When?</span> <span style="color: #0000ff">Where? </span></span><span style="color: #000000">details at the beginning.</span></h4>
&nbsp;
<ul>
 	<li>
<h3><em><span style="color: #ff00ff"><span style="color: #000000">On the <span style="color: #339966">holidays</span>, my friend <span style="color: #ff6600">Josh</span> and <span style="color: #ff6600">I</span> <span style="color: #0000ff">built a giant cubby in my backyard.</span></span></span></em></h3>
</li>
</ul>
<img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Openings_Introduction/Level%201%20Colourful%20Semantics.png" width="100%"  />');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Funnel Strategy</strong>
<ol>
 	<li>Make a funnel with an A4 sheet of paper.</li>
 	<li>Write down three ideas you want to write about on separate pieces of paper, fold them up and put them in the funnel.</li>
 	<li>Take out one idea from the bottom of the funnel.</li>
 	<li>Write three interesting things about the idea and put them into the empty funnel.</li>
 	<li>Take out one idea from the bottom of the funnel.</li>
 	<li>You now have a specific topic to write about</li>
</ol>
</td>
<td width="4%"></td>
<td width="48%"><img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Narrow%20Ideas/Funnel.jpg" width="100%"  /></td>
</tr>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Stay on Topic Strategy: </strong>Read your writing aloud and <strong>cross out</strong> anything that is not about the <strong>main idea.</strong></td>
<td width="4%"></td>
<td width="48%"><img class="alignleft" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Narrow%20Ideas/Student%20example%20-%20Whale2.png" width="60%"  /></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td width="100%"><strong><span style="color: #000000">  <img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Developing%20Ideas/Developing%20ideas%20L1.png" width="90%"  /></span></strong></td>
</tr>
</tbody>
</table>
&nbsp;

<img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Developing%20Ideas/Tell%20Me%20More%20L1.png" width="90%"  />');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td width="48%">Use <strong>and </strong>to add more detail
<ul>
 	<li><em>E.g. At the movies, we had ice-cream <strong>and</strong> popcorn.).</em></li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
<tr>
<td width="48%">Use <strong>then </strong>to put events in order
<ul>
 	<li><em>E.g. My friend came to the movies.  <strong>Then</strong> we went out for pizza.</em></li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
<tr>
<td width="48%">Use <strong>because </strong>to explain why something happened
<ul>
 	<li><em>E.g. We lost the game <strong>because</strong> we didn''t have enough players.</em></li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<h6><strong>[I will leave content, despite redundancy of level 1 goals for now]</strong></h6>
Sentences make sense and sound right when reading them aloud.                                                                                                         <img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Grammar%20Usage/face%201.jpg" width="24"  /> ''The dog go to the park''             ''The dog went to the park'' <img class="alignnone" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Grammar%20Usage/face%202.jpg" width="25"  />');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Read your writing and see if you can change some words to make them more specific or precise. See the example below.</td>
<td width="4%"></td>
<td valign="top" width="48%"></td>
</tr>
</tbody>
</table>');
INSERT INTO strategies(strategy_Desc) VALUES ('<h6><strong>[I will leave content, despite redundancy of level 1 goals for now]</strong></h6>
Use <strong>adjectives</strong> to describe people, places and things. (<em>Clare put on her <span style="text-decoration: underline">red</span> <span style="text-decoration: underline">shiny</span> shoes.</em>)

Find different and more interesting words (synonym) that mean the same thing. (<em>She put on her <del>red</del> shoes.  She put on her ruby shoes</em>).  Use a <strong>thesaurus</strong> or <strong>synonym</strong> list to help you.');
INSERT INTO strategies(strategy_Desc) VALUES ('<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" /> </span>Memorable last line</strong>: Make sure the main problem is resolved and then end with an interesting last line.

&nbsp;
<ul>
 	<li><strong><em>Dialogue </em></strong><em>She turned to her brother and said, "Now let me tell you what really happened."</em></li>
</ul>
&nbsp;
<ul>
 	<li><strong>S</strong><em><strong>urprise</strong> Jack opened his eyes and everything had changed, again!</em></li>
</ul>
&nbsp;
<ul>
 	<li><strong>Describe a scene</strong> <em>Max curled up in his bed, fell fast asleep and thought, this was the best day of his life.  </em></li>
</ul>');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Story Map</strong>: Write the beginning, middle and ending of your story in a graphic organiser.

<img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Sequencing/Story%20Map.png" width="70%"  /></td>
<td width="4%"></td>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Time and location connectives</strong>:  Use connectives to help put events in order and make your writing flow.

<img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Sequencing/Connectives%20list.png" width="100%"  />

&nbsp;</td>
</tr>
</tbody>
</table>');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td width="48%"><strong>Simile</strong>: Compares two things using the words ''like'' or ''as''.

<em>E.g. It was as cold as ice</em>.  <em>Max eats like a pig</em>.</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
<tr>
<td width="48%"><strong>Hyperbole</strong>: Exaggerating to make a point.

<em>E.g. I have a <span style="text-decoration: underline">million</span> things to do.  My shoes are <span style="text-decoration: underline">killing</span> me.</em></td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
<tr>
<td width="48%"><strong>Onomatopoeia</strong>: A word that mimics a sound.

<em>E.g. </em><em><span style="text-decoration: underline">Crash</span>! I could hear the <span style="text-decoration: underline">clip clop</span> of the horses in the distance</em>.</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td width="48%"><span style="color: #000000"><strong><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" /> Strong Feelings: </strong> Choose a list of emotions and write about the times you remember feeling those emotions. </span><span style="color: #000000"> </span></td>
<td width="4%"></td>
<td width="48%"><img class="alignnone" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Feelings%203.png" width="95%"  /></td>
</tr>
<tr>
<td valign="top" width="48%"><span style="color: #000000"><strong style="font-family: inherit;font-size: inherit"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </strong><strong>KIC Strategy</strong></span>:  Write a list of things you know about, imagine and can do.  Choose one thing from the list and talk about it with a peer. Have them ask you ''Why'' and ''Tell me More" over and over to help you develop that idea.</td>
<td width="4%"></td>
<td width="48%"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Finding%20Ideas/KIC.png" width="95%"  /></td>
</tr>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Write a list</strong>: Write a list based on the topics below or your own topic/question.  Circle anything from your list that you would like to write more about.  Here are some other topics you could write a list about:
<ul>
 	<li style="text-align: left"><strong>I love...</strong></li>
 	<li style="text-align: left"><strong>I wish I could...</strong></li>
 	<li style="text-align: left"><strong>I dislike…</strong></li>
 	<li style="text-align: left"><strong>I am an expert at...</strong></li>
 	<li style="text-align: left"><strong>I need to improve on...</strong></li>
 	<li style="text-align: left"><strong>People like me because...</strong></li>
 	<li style="text-align: left"><strong>Why would anyone...?</strong></li>
 	<li style="text-align: left"><strong>My favourite... (movies/books/authors...)</strong></li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"><img class="alignleft" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Finding%20Ideas/List%203.png" width="73%"  />

&nbsp;

&nbsp;

&nbsp;

&nbsp;

&nbsp;

&nbsp;

&nbsp;

&nbsp;

&nbsp;

&nbsp;

&nbsp;

<b><span style="color: #000000"><strong><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" /> </strong></span>5Ws: </b>Now answer the 5Ws about this topic to develop your idea.  Who?  What?  When?  Where?  Why? Where?</td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Reread aloud:</strong> Slowly read your writing aloud from start to finish. Point to each word as you read.  Listen carefully to make sure sentences are clear and make sense.  Stop anytime and fix errors, add detail or cross out words or sentences that don''t need to be there.</td>
<td width="4%"></td>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  Caret: </span></strong>Add or change words within sentences using a caret (∨).

<img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Revision%20and%20Editing/Ex%20sentence%20caret.png" width="100%"  /></td>
</tr>
</tbody>
</table>
<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Circle Editing: </strong>Practice peer editing with a group. It''s fun and effective. Read the instructions below.

<img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Revision%20and%20Editing/Circle%20Editing%20pic%20and%20inst.png" width="100%"  />

<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Peer Feedback</strong>: Have a peer read your writing and ask you questions from the list on the left.  Ask them to put a smiley face next to the parts they like and a plus sign next to the parts they want to know more about.

<img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Revision%20and%20Editing/Peer%20Feedback%20L2%20version%202.png" width="100%"  />');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Draw your character</strong> with lots of colour and close up details. Then <strong>label</strong> your drawing. Use your picture to help you describe them in your writing.

<img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Character%20Development/Level%201%20old%20man.png" width="60%"  /></td>
<td width="4%"></td>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Write about what your characters are <strong>thinking</strong> and <strong>feeling</strong>.
<ul>
 	<li><span style="color: #000000"><em>Tom was <strong>nervous</strong> and <strong>excited</strong> about starting at a new school. He <strong>wondered</strong> if he would make a friend on the first day.</em></span></li>
</ul>
</td>
</tr>
</tbody>
</table>');
INSERT INTO strategies(strategy_Desc) VALUES ('<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong><span style="color: #000000">Add an interesting first sentence to hook the reader. </span>
<ul>
 	<li><span style="color: #000000"><strong>A sound</strong> (Woosh)</span></li>
 	<li><span style="color: #000000"><strong>Dialogue</strong> ("Watch out!")</span></li>
 	<li><span style="color: #000000"><strong>A surprising fact</strong> (I live next door to a giant)</span></li>
</ul>
&nbsp;

<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Add the<strong> 5Ws</strong> to your beginning. (<span style="color: #ff6600">who</span>, <span style="color: #ff00ff">what</span>, <span style="color: #339966">when</span>, <span style="color: #0000ff">where</span> + <span style="color: #ff0000">why</span>).
<ul>
 	<li>''Guess what?  There is a new <span style="color: #ff6600">boy</span> in my class.  His name is <em><span style="color: #ff6600">Billy </span>and he is the <span style="color: #ff00ff">smartest kid</span> in the whole <span style="color: #0000ff">school</span>.  <span style="color: #ff6600">Billy</span> <span style="color: #ff0000">lives next door to a library</span>.''</em></li>
</ul>
<img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Openings_Introduction/Level%201%20Colourful%20Semantics.png" width="100%"  />');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Stay on Topic Strategy: </strong>Read your writing aloud and <strong>cross out</strong> anything that is not about the <strong>main idea.</strong></td>
<td width="4%"></td>
<td width="48%"><img class="alignleft" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Narrow%20Ideas/Student%20example%20-%20Whale2.png" width="60%"  /></td>
</tr>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Put it in Order Strategy:</strong>
<ol>
 	<li>Write all the events that happen in order. Even the boring parts. It will look like a list.</li>
 	<li>Cross out anything that is not about the main idea or not interesting.</li>
 	<li>Choose an interesting topic from the list and write about that. See example:</li>
</ol>
</td>
<td width="4%"></td>
<td width="48%"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Narrow%20Ideas/Put%20it%20in%20Order.png" width="98%"  /></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>To help organise your ideas and make it easier for the reader to read, try adding a space between large chunks of text.
<ul>
 	<li>Read your writing from the beginning and when the following changes, start a new paragraph:
<ul>
 	<li><strong>Topic</strong></li>
 	<li><strong>Time</strong></li>
 	<li><strong>Place </strong>(setting)</li>
 	<li><strong>Person </strong>(new speaker)</li>
</ul>
</li>
</ul>
</td>
<td width="4%"></td>
<td width="48%" valign="top"><img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Paragraphing/Time%20Topic%20Place%20Person%20picture.png" width="100%"  /></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<img src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Developing%20Ideas/Dev%20Ideas%20L2.png" width="100%" />');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Make a <strong>five senses organiser</strong> to describe people, places and actions (see, hear, smell, feel, taste).

&nbsp;

<img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Elaborating%20Ideas/Level%202-4.png" width="100%"  /></td>
<td width="4%"></td>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Draw</strong> people or places with lots of colour, close up details and setting details.  You can also label your picture.

Use your picture to help you add detail to your writing.

<img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Elaborating%20Ideas/Pictorial%20writing.png" width="100%"  />

&nbsp;</td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<h6><strong>Making sentences longer</strong></h6>
<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" /> </span></strong><span style="color: #000000"> C</span>ombine two short sentences using ''<em>and</em>''.
<ul>
 	<li><strong>Instead of:</strong> <em>I went to the park. I played footy</em>.</li>
 	<li><strong>Try:</strong> <em>I went to the park <strong>and </strong>I played footy</em>.</li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong><span style="color: #000000">Add some of the</span><strong><span style="color: #000000"> 5Ws (<span style="color: #ff9900">Who</span>, <span style="color: #3366ff">what</span>, where, <span style="color: #ff00ff">when</span>, <span style="color: #99cc00">why</span>) </span></strong><span style="color: #000000">to your sentences to stretch them out.</span>
<ul>
 	<li>While we were <span style="color: #ff00ff">asleep</span>, my <span style="color: #ff9900">puppy </span><span style="color: #3366ff">chewed the new couch,</span> because she <span style="color: #99cc00">lost her bone</span>.</li>
</ul>
</td>
<td width="4%"></td>
<td valign="top" width="48%"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Sentence%20Length/5Ws.png" width="100%"  /></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Read your writing and <span style="text-decoration: underline">draw an outline around the beginning, middle and end</span>.  The middle should be longer and contain more detail.  If it isn''t, use some of the strategies below to add detail and make your middle longer.</td>
<td width="4%"></td>
<td width="48%"><img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Pacing/Outline%20traffic%20lights.png" width="97%"  /></td>
</tr>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Draw</strong> people or actions with lots of <strong>colour </strong>and <strong>close up</strong> details.  Use your picture to add detail to your writing.</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Describe people, places and actions using the <strong>five senses</strong> (<strong>see</strong>, <strong>hear</strong>, <strong>smell</strong>, <strong>feel</strong>, <strong>taste</strong>).</td>
<td width="4%"></td>
<td width="48%"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Pacing/Five%20Senses.png" width="100%"  /></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<h3 style="text-align: center"><strong>Punctuation Rules and Examples</strong></h3>
<img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Punctuation/Level%202%20punct.png" width="100%"  />');
INSERT INTO strategies(strategy_Desc) VALUES ('Connectives List:
<ul>
 	<li><strong>Time Connectives</strong>: later, later on, before, soon.</li>
 	<li><strong>Adding information</strong>: also, too, and, so, but.</li>
 	<li><strong>List</strong>: First, second, third, finally, next, after that.</li>
 	<li><strong>Explaining</strong>: For example, because.</li>
</ul>');
INSERT INTO strategies(strategy_Desc) VALUES ('tbc');
INSERT INTO strategies(strategy_Desc) VALUES ('Different ways to begin sentences:
<ul>
 	<li><b>When</b>: On, At, When, During, In the morning/evening, that day/night</li>
 	<li><strong>Sequence</strong>: Next, Then, Later on, After, After that</li>
 	<li><strong>Conjunctions</strong>: After, While, As, Because, If, Now, Once, But, Since, So</li>
 	<li><strong>Pronouns</strong>: I, We, He, She, They, Our, My</li>
 	<li><strong>Other interesting starters</strong>: Suddenly, Wow, Splash, Bang, Despite, Meanwhile, By the time, It was, Let me tell you.</li>
</ul>');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>In your writing, find sentences with nouns and see if you can ''add more detail'' or ''expand'' them by adding an <span style="text-decoration: underline">article</span> and <span style="text-decoration: underline">adjective</span>. See the example below:
<ul>
 	<li>I ate chips.</li>
 	<li>I ate <strong>a</strong> <strong>large</strong>, <strong>hot</strong> bucket of chips.</li>
</ul>
&nbsp;

<strong>Nouns</strong>: Nouns are people, places, objects, and ideas (Peter, Mum, Grandpa, park, cinema, book, bed, house).

<strong>Articles</strong>: a, an, the

<strong>Adjectives</strong>: Describing words (big, small, red, yellow, angry, happy, round, long).</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Read your writing and underline nouns and verbs.  See if you can change them to make them more specific. See the example below.
<ul>
 	<li><strong>Nouns</strong> are things, people and places (table, dog, house, ball, John, park)</li>
 	<li><strong>Verbs</strong> are actions (jump, run, hit, cry, laugh)</li>
</ul>
</td>
<td width="4%"></td>
<td valign="top" width="48%"></td>
</tr>
</tbody>
</table>');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Somebody, Wanted, But, So, Then</strong>: Retell a story plot using these sentence starters.</td>
<td width="4%"></td>
<td width="48%"><img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Retelling%20and%20Summarising/SWBS.png" width="100%"  /></td>
</tr>
</tbody>
</table>');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Use <strong>adjectives</strong> to describe people, places and things.
<ul>
 	<li><em>Clare put on her <span style="text-decoration: underline">red</span> <span style="text-decoration: underline">shiny</span> shoes.</em></li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Find different and more interesting words (<strong>synonym</strong>) that mean the same thing. Use a thesaurus/synonym list.
<ul>
 	<li><em>She put on her <del>red</del> shoes.  She put on her ruby shoes</em>.</li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" /></span></strong>Underline all the general nouns and verbs in your writing and replace them with <strong>precise nouns</strong> and <strong>verbs</strong>.
<ul>
 	<li>The flowers hung down in the sun. (general)</li>
 	<li>The <span style="text-decoration: underline">roses</span> <span style="text-decoration: underline">wilted</span> in the sun. (precise)</li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Compound Sentences:</strong> Join one or more ideas within a sentence using a coordinating conjunction.  To remember the conjunctions, think of the acronym FANBOYS (for, and, nor, but, or, yet, so).</td>
<td width="4%"></td>
<td width="48%"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Different%20types%20of%20Sentences/Compound%20Sentences.png" width="100%" /></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" /> </span>Memorable last line</strong>: Make sure the main problem is resolved and then end with an interesting last line.

&nbsp;
<ul>
 	<li><strong><em>Dialogue: </em></strong><em>Before she left, she turned to her brother and said, "If I come back, I''ll tell you the whole truth."</em></li>
</ul>
&nbsp;
<ul>
 	<li><em><strong>Funny thought: </strong>As Ms. Bloomberg approached me, the old wooden slats creaked beneath her feet.  With every step, I imagined her falling through the floor. </em></li>
</ul>
&nbsp;
<ul>
 	<li><strong>S</strong><em><strong>urprise:  </strong>Jack opened his eyes and everything was black.</em></li>
</ul>
&nbsp;
<ul>
 	<li><strong>Describe a scene: </strong><em>Max curled up in his kennel and fell fast asleep.  </em></li>
</ul>');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"> <strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Storyboard</strong>: Draw or write your ideas in order using a storyboard.  You can even use small pieces of square paper and move them into the right order.

<img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Sequencing/Storyboard.png" width="88%"  /></td>
<td width="4%"></td>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Put it in Order Strategy:</strong>

1.Write all the events that happen in order. Even the boring parts. It will look like a list.

2. Cross out anything that is not about the main idea or not interesting.

3. Choose an interesting topic from the list and write about that.

<img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Narrow%20Ideas/Put%20it%20in%20Order.png" width="98%"  /></td>
</tr>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Rule of Three</strong>: Plan your story with an orientation, and two problems leading up to a big problem, then a resolution.

&nbsp;</td>
<td width="4%"></td>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Time and location connectives</strong>:

<img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Sequencing/Connectives%20list.png" width="100%"  /></td>
</tr>
</tbody>
</table>');
INSERT INTO strategies(strategy_Desc) VALUES ('Try to create your own original figurative language, rather than something common and cliche.  See below.
<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong>Simile</strong>: Compares two things using the words ''like'' or ''as''.

<em>E.g. It was as cold as my breakfast this morning.</em></td>
<td width="4%"></td>
<td width="48%"><strong>Metaphor</strong>: It compares two things <span style="text-decoration: underline">without</span> using the words like or as.

<em>E.g. My Aunt <span style="text-decoration: underline">is</span> a dragon.  The house <span style="text-decoration: underline">was</span> a zoo.</em></td>
</tr>
<tr>
<td valign="top" width="48%"><strong>Hyperbole</strong>: Exaggerating to make a point.

<em>E.g. I have <u>50 million </u>things to do.  My shoes are slowly <span style="text-decoration: underline">killing</span> me.</em></td>
<td width="4%"></td>
<td width="48%"><strong>Alliteration</strong>: Words that start with the same sound are used repeatedly to create rhythm and fluency.

<em>E.g. <span style="text-decoration: underline">Faint</span> <span style="text-decoration: underline">footsteps</span> followed me. Meg <span style="text-decoration: underline">planted</span> the <span style="text-decoration: underline">pretty</span> flowers.</em></td>
</tr>
<tr>
<td valign="top" width="48%"><strong>Onomatopoeia</strong>: A word that mimics a sound.

<em>E.g. </em><em><span style="text-decoration: underline">Pitter patter</span>! Waves <span style="text-decoration: underline">crashed</span> against the rocks</em>.</td>
<td width="4%"></td>
<td width="48%"><strong>Personification: </strong>When objects are given human qualities.

<em>E.g. The leaves <span style="text-decoration: underline">danced</span> in the wind.  The cookies were <span style="text-decoration: underline">begging</span> to be eaten.</em></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Free Writing</strong>: Put a timer on for two minutes and write anything that comes to mind. Don''t stop writing.  Write about something specific or just general thoughts that pop into your head.</td>
<td width="4%"></td>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Mind Map</strong>: Write a word in the middle of your mindmap.  It can be a person, place or thing that interests you. Then brainstorm other things about that word.  Just keep going and let your imagination stretch as far as you can.  See example.

<img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Finding%20Ideas/Mind%20Map.png" width="100%"  /></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Reread aloud:</strong> Slowly read your writing aloud from start to finish. Point to each word as you read. Listen carefully to make sure ideas make sense and the writing flows. Stop as you read to make changes.</td>
<td width="4%"></td>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Make Room to Revise</strong>:
<ul>
 	<li>Leave space at the bottom of your page to add longer sentences or paragraphs.</li>
 	<li>Leave the left page blank for rewriting large sections or sentences and brainstorming.</li>
 	<li>Write on every second line (double spacing).</li>
</ul>
<img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Revision%20and%20Editing/Make%20Room%20to%20Edit.png" width="75%"  /></td>
</tr>
</tbody>
</table>
<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Peer Feedback</strong>: Have a peer read your writing and ask you questions from the list below.  Ask them to put a symbol

(<img class="alignnone" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Revision%20and%20Editing/smiley%20face.jpg" width="18"  />+ - ?) next to the parts they like, want to know more of, less of, and what parts confuse them.

<img class="alignleft" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Revision%20and%20Editing/Peer%20Feedback%20L3-6.png" width="75%"  />

&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Make a sentence with <span style="text-decoration: underline">three</span> parts about where your character is <b>standing</b>, what they <strong>see</strong> and what they <strong>think</strong>. See example.
<ul>
 	<li><em>Ben <span style="text-decoration: underline">climbed</span> the fence and peeked over the top.  He <span style="text-decoration: underline">saw</span> his neighbour digging a giant hole and he <span style="text-decoration: underline">wondered</span> if he was up to no good.</em></li>
</ul>
</td>
<td width="4%"></td>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Describe your character''s actions and emotions using ''<strong>Show don''t Tell</strong>''.
<ul>
 	<li>Telling:  <em>Jack was very happy</em>.</li>
 	<li>Showing: <em>Jack lept in the air, spun around 360 degrees, and then started dancing on the spot!</em></li>
 	<li><strong>INSERT IMAGE  - Show Don''t Tell</strong></li>
</ul>
</td>
</tr>
</tbody>
</table>');
INSERT INTO strategies(strategy_Desc) VALUES ('<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Begin with a <strong>hook</strong> to get the reader interested.
<ul>
 	<li><strong>A sound</strong> <em>Woosh</em>.</li>
 	<li><strong>T</strong><strong>alk to the reader </strong>"<em>You probably won''t believe me when I tell you my story</em>."</li>
 	<li><strong>A surprising fact </strong><em>Although I look 30, I''m actually 12</em>.</li>
 	<li><strong>A sad fact</strong> <em>I have been poor my whole life</em>.</li>
</ul>
&nbsp;

<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" /> </span></strong>Add the <strong>5Ws</strong> to the beginning so the reader can form a clear picture of where events take place and details about the                characters.
<ol>
 	<li><strong>Who</strong> it is about</li>
 	<li><strong>What</strong> they are doing</li>
 	<li><strong>When</strong> it is set (year, time, season, etc.)</li>
 	<li><strong>Where</strong> it is happening (farm, city, school, country)</li>
 	<li><strong>Why - </strong> A brief explanation (<em>I''ve been living on a Farm in Apollo Bay with my grandparents for a month now <span style="text-decoration: underline">because</span> <span style="text-decoration: underline">my parents are on holiday overseas</span>). </em></li>
</ol>');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Stay on Topic Strategy: </strong>Read your writing aloud and <strong>cross out</strong> anything that is not about the <strong>main idea.</strong></td>
<td width="4%"></td>
<td width="48%"><img class="alignleft" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Narrow%20Ideas/Student%20example%20-%20Whale2.png" width="60%"  /></td>
</tr>
</tbody>
</table>
<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>PASTA</strong> <strong>prompt: </strong>Complete a PASTA prompt based on a piece of writing.  It will help you narrow your idea and stay focused by looking at the five elements of style and voice.  See the examples below.

<img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Narrow%20Ideas/PASTA%20Prompt.PNG" width="97%"  />');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>To help organise your ideas and make it easier for the reader to read, try adding a space between large chunks of text.

&nbsp;

Read your writing from the beginning and when the following changes, start a new paragraph:
<ul>
 	<li><strong>Topic</strong></li>
 	<li><strong>Time</strong></li>
 	<li><strong>Place </strong>(setting)</li>
 	<li><strong>Person </strong>(new speaker)</li>
</ul>
</td>
<td width="4%"></td>
<td valign="top" width="48%"><img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Paragraphing/Time%20Topic%20Place%20Person%20picture.png" width="100%"  /></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" /> </span></strong>Read your writing to a peer and have them tell you which parts they want to know more about.
<ul>
 	<li>Put a plus symbol (<strong>+) </strong>next to the ideas they want to know more about.</li>
 	<li>After you receive feedback, revise your writing to add the additional information.</li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"><img src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Developing%20Ideas/Tell%20Me%20More%20card.png" width="60%" /></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Make a <strong>five senses organiser</strong> to describe people, places and actions (see, hear, smell, feel, taste).

&nbsp;

<img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Elaborating%20Ideas/Level%202-4.png" width="100%"  /></td>
<td width="4%"></td>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" /> Show don''t Tell: </span></strong><span style="color: #000000">Describe what is happening or how people are feeling rather than telling.  For example, instead of ''</span><span style="color: #000000"><em>She was really angry'', </em>better to write, <em>''Sam pounded her fists on the table.''</em></span>

<img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Elaborating%20Ideas/Level%201-2.png" width="95%"  />

&nbsp;</td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<h6><strong>  Making sentences longer                                                                                                              </strong></h6>
<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" /> </span></strong><span style="color: #000000"> Combine two short sentences using a conjunction (for, and, because, but, or, nor, yet, so)</span>
<ul>
 	<li><strong>Instead of:</strong> <em>Nick had to leave. His friend was waiting for him.</em></li>
 	<li><strong>Try:</strong> <i>Nick had to leave <strong>because</strong> his friend was waiting for him.</i></li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Different%20types%20of%20Sentences/Compound%20Sentences.png" width="100%"  />

&nbsp;</td>
</tr>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong><span style="color: #000000">Add some of the</span><strong><span style="color: #000000"> 5Ws (<span style="color: #ff9900">Who</span>, <span style="color: #3366ff">what</span>, where, <span style="color: #ff00ff">when</span>, <span style="color: #99cc00">why</span>) </span></strong><span style="color: #000000">to your sentences to stretch them out.</span>
<ul>
 	<li>While we were <span style="color: #ff00ff">asleep</span>, my <span style="color: #ff9900">puppy </span><span style="color: #3366ff">chewed the new couch,</span> because she <span style="color: #99cc00">lost her bone</span>.</li>
</ul>
&nbsp;</td>
<td width="4%"></td>
<td valign="top" width="48%"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Sentence%20Length/5Ws.png" width="100%"  /></td>
</tr>
</tbody>
</table>
<h6><strong>  Making sentences shorter</strong></h6>
<table style="height: 24px" width="838">
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong><span style="color: #000000">Add a one, two or three word phrases between long sentences for effect.</span>
<ul>
 	<li>That''s insane!  Can you believe that? Woosh! Fabulous! Wow!</li>
</ul>
<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Create a short noun and verb phrase.
<ul>
 	<li>He frowned.  She bolted.  They left.  Wind whistled.  Branches waved.  Babies cried.  People cheered.</li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Read your writing and <span style="text-decoration: underline">draw an outline around the beginning, middle and end</span>.  The middle should be longer and contain more detail.  If it isn''t, use the <strong>Show don''t Tell</strong> strategy to add detail and add more detail to your middle.

&nbsp;

<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Use <strong>Show don''t Tell</strong> to add detail to your writing and slow down the pace.

Describe what is happening or how people are feeling rather than telling. For example:
<ul>
 	<li><strong>Telling: </strong>''<em>He ran fast.''</em></li>
 	<li><strong>Showing: </strong><em>''Sam bolted down the street, not looking behind him.  His heart was pounding and sweat dripped down his red face.''</em></li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"><img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Elaborating%20Ideas/Level%201-2.png" width="75%"  /></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<h3 style="text-align: center"><strong>Punctuation Rules and Examples</strong></h3>
<img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Punctuation/Punctuation%20L3.png" width="90%"  />');
INSERT INTO strategies(strategy_Desc) VALUES ('Connectives List:
<ul>
 	<li><strong>Time Connectives</strong>: later, later on, before, soon.</li>
 	<li><strong>Adding information</strong>: also, too, and, so.</li>
 	<li><strong>List</strong>: First, second, third, finally, next, after that.</li>
 	<li><strong>Explaining</strong>: For example, because.</li>
 	<li><strong>Contrast ideas</strong>: although, yet, but.</li>
</ul>');
INSERT INTO strategies(strategy_Desc) VALUES ('tbc');
INSERT INTO strategies(strategy_Desc) VALUES ('Different ways to begin sentences:

<strong>Adjective: </strong><em><span style="text-decoration: underline">Red</span> flowers appeared on my doorstep. </em>

<strong>Proper noun: </strong><em><span style="text-decoration: underline">Danny</span> rushed through the door. </em>

<strong>Adverb: </strong><span style="text-decoration: underline">Quietly</span>, she took a seat in the library.

<strong>Sequence</strong>: Next, Then, Later on, After that

<strong>Conjunctions</strong>: After, Although, As, While, As, Because, Before, Until, If, Since, Now, Once, But

<strong>Pronouns</strong>: I, We, He, She, They, Our

Look at other texts from good authors and <strong>imitate</strong> the different types of sentence beginnings (Despite, Actually, If only).');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>If a sentence is stating that a <strong>noun</strong> has ownership of an <strong>object</strong>, it is called a <strong>possessive noun</strong>.

Look at the example below. Because the kennel belongs to the dog, you need to put an apostrophe before the s.
<h2 style="text-align: center">My dog''s kennel is wooden.</h2>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Read your writing and underline any general nouns and verbs. See if you can change them to make them more specific. See the example below.
<ul>
 	<li><strong>Nouns</strong> are things, people and places (table, dog, house, ball, John, park)</li>
 	<li><strong>Verbs</strong> are actions (jump, run, hit, cry, laugh)</li>
</ul>
</td>
<td width="4%"></td>
<td valign="top" width="48%"></td>
</tr>
</tbody>
</table>');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>One Sentence Summary: </strong>This strategy helps you explain in one sentence the author''s purpose and the main idea.</td>
<td width="4%"></td>
<td width="48%"><img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Retelling%20and%20Summarising/Main%20Idea%20Summary.png" width="100%"  /></td>
</tr>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" /> One Word/Phrase</span>: </strong> Read sentences and try to sum up in one word or phrase what the author is trying to say. Then combine the words and phrases to make a short summary.  See example below (People, Places, Things, Animals)
<ul>
 	<li> ''Great white sharks are super swimmers''.  - <strong>F<em>ast</em></strong></li>
 	<li>  ''They are called predatory fish because they eat other fish.'' - <em><strong>Predatory</strong></em></li>
 	<li>  ''Thailand, Malaysia, Singapore, and Indonesia.'' - <em><strong>Southeast Asia</strong></em></li>
</ul>
&nbsp;</td>
<td width="4%"></td>
<td valign="top" width="48%"><img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Retelling%20and%20Summarising/Categorise%205W%20and%20noun%20groups.png" width="100%"  />*Categorise lists of people, places, things, and animals into one word.</td>
</tr>
</tbody>
</table>');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Find different and more interesting words (<strong>synonym</strong>) that mean the same thing. Use a thesaurus or synonym list to help you.
<ul>
 	<li><em>She put on her <del>red</del> shoes.  She put on her ruby shoes</em>.</li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Underline all the general nouns and verbs in your writing and replace them with <strong>precise</strong> <strong>nouns</strong> and <strong>verbs</strong>
<ul>
 	<li>The flowers hung down in the sun.  The <span style="text-decoration: underline">roses</span> <span style="text-decoration: underline">wilted</span> in the sun).</li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Create a list of <strong>topic-specific words</strong> for people, places and things.
<ul>
 	<li>E.g. Zoo: enclosure, habitat, endangered, camouflage.  Use these words in your writing.</li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Complex Sentences:</strong> Complex sentences contain an independent and subordinate (dependent) clause.  The subordinate clause does not make sense on its own, and needs the independent clause to complete the sentence.

&nbsp;

The letters in the acronym AAAWWUBBIS are subordinating conjunctions. Use them to create complex sentences.

<img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Different%20types%20of%20Sentences/AAAWWUBBIS.png" width="100%"  /></td>
<td width="4%"></td>
<td valign="top" width="48%"><img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Different%20types%20of%20Sentences/Complex%20Sentence.png" width="100%"  />

*The underlined parts begin with a subordinating conjunction and do not make sense on their own.</td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('tbc');
INSERT INTO strategies(strategy_Desc) VALUES ('<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" /> </span>Memorable last line</strong>: Make sure the main problem is resolved and then end with an interesting last line.

&nbsp;
<ul>
 	<li><strong>Circular ending</strong>: The story ends with the same/similar line or event as the beginning.</li>
</ul>
&nbsp;
<ul>
 	<li><strong>Question</strong>: End with a question to make the reader think.  <em>Who is going to save us now?</em></li>
</ul>
&nbsp;
<ul>
 	<li><strong><em>Dialogue</em></strong><em>: </em><em>Before she left, she turned to her brother and said, "If I come back, I''ll tell you the whole truth</em>."</li>
</ul>
&nbsp;
<ul>
 	<li><strong>A f</strong><em><strong>unny thought</strong>: Very few people can say they''ve achieved as many failures as I have.  </em></li>
</ul>
&nbsp;
<ul>
 	<li><strong><em>A </em>s</strong><em><strong>urprise ending</strong>: Jack opened his eyes and everything was black</em>.</li>
</ul>
&nbsp;
<ul>
 	<li><strong>Describe a scene</strong>: <em>Max curled up in his kennel and fell fast asleep.</em></li>
</ul>');
INSERT INTO strategies(strategy_Desc) VALUES ('Try to create your own original figurative language, rather than something common and cliche.  See below.
<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong>Simile</strong>: Compares two things using the words ''like'' or ''as''.

<em>E.g. It was as cold as my breakfast this morning.</em></td>
<td width="4%"></td>
<td width="48%"><strong>Metaphor</strong>: It compares two things <span style="text-decoration: underline">without</span> using the words like or as.

<em>E.g. My Aunt <span style="text-decoration: underline">is</span> a dragon.  The house <span style="text-decoration: underline">was</span> a zoo.</em></td>
</tr>
<tr>
<td valign="top" width="48%"><strong>Hyperbole</strong>: Exaggerating to make a point.

<em>E.g. I have <u>50 million </u>things to do.  My shoes are slowly <span style="text-decoration: underline">killing</span> me.</em></td>
<td width="4%"></td>
<td width="48%"><strong>Alliteration</strong>: Words that start with the same sound are used repeatedly to create rhythm and fluency.

<em>E.g. <span style="text-decoration: underline">Faint</span> <span style="text-decoration: underline">footsteps</span> followed me. Meg <span style="text-decoration: underline">planted</span> the <span style="text-decoration: underline">pretty</span> flowers.</em></td>
</tr>
<tr>
<td valign="top" width="48%"><strong>Onomatopoeia</strong>: A word that mimics a sound.

<em>E.g. </em><em><span style="text-decoration: underline">Pitter patter</span>! Waves <span style="text-decoration: underline">crashed</span> against the rocks</em>.</td>
<td width="4%"></td>
<td width="48%"><strong>Personification: </strong>When objects are given human qualities.

<em>E.g. The leaves <span style="text-decoration: underline">danced</span> in the wind.  The cookies were <span style="text-decoration: underline">begging</span> to be eaten.</em></td>
</tr>
<tr>
<td valign="top" width="48%"><strong>Oxymoron</strong>: Words that are opposite or contradict each other.

E.g. <em>We have a <span style="text-decoration: underline">love-hate</span> relationship. It was <span style="text-decoration: underline">seriously funny</span>.</em></td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Free Writing</strong>: Put a timer on for two minutes and write anything that comes to mind. Don''t stop writing.  Write about something specific or just general thoughts that pop into your head.</td>
<td width="4%"></td>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Mind Map</strong>: Write a word in the middle of your mindmap.  It can be a person, place or thing that interests you. Then brainstorm other things about that word.  Just keep going and let your imagination stretch as far as you can.  See example.

<img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Finding%20Ideas/Mind%20Map.png" width="100%"  /></td>
</tr>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Looping</strong>: After freewriting, read your writing then put a circle or loop around a word or sentence that you want to write about.  Set the timer again and write about that topic for another 2 minutes.  You can continue looping until you''re happy with your ideas.

<img class="alignleft" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Finding%20Ideas/Looping.png" width="75%"  />

&nbsp;</td>
<td width="4%"></td>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>See-Think-Wonder</strong>: Look at pictures or go for a walk and observe everything around you.  Write down what you see, you think and what it makes you wonder.

&nbsp;

<img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Finding%20Ideas/See%20Think%20Wonder.png" width="100%"  />

&nbsp;</td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Reread aloud:</strong> Slowly read your writing aloud from start to finish. Point to each word as you read.  Listen carefully and check that ideas and details make sense and the writing flow logically. Stop as you read to make changes.</td>
<td width="4%"></td>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  Rest and </span>Revisit</strong>:  Don''t revise and edit in one go.  Take breaks so you can look at your writing with fresh eyes. You''ll be amazed at how much easier and clearer the revision process is when you''ve stepped away from your writing.</td>
</tr>
</tbody>
</table>
<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Peer Feedback</strong>: Have a peer read your writing and ask you questions from the list below.  Ask them to put a symbol

(<img class="alignnone" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Revision%20and%20Editing/smiley%20face.jpg" width="18"  />+ - ?) next to the parts they like, want to know more of, less of, and what parts confuse them.

<img class="alignleft" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Revision%20and%20Editing/Peer%20Feedback%20L3-6.png" width="75%"  />

&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>List interesting facts about your character:
<ul>
 	<li><em><strong>Personality</strong> </em>(<em>angry, calm, giving</em>)</li>
 	<li>Interesting <strong>P</strong><em><strong>hysical features</strong></em> (<em>she has wiry grey hair that sticks out in all directions</em>)</li>
 	<li>How are they <em><strong>connected to other characters</strong></em> (brother, best friend)</li>
 	<li>Interesting facts about their <em><strong>past </strong>(He never smiled, not even as a child). </em></li>
</ul>
</td>
<td width="4%"></td>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Describe your character''s actions and emotions using ''<strong>Show don''t Tell</strong>''.
<ul>
 	<li>Telling:  <em>Jack was very happy</em>.</li>
 	<li>Showing: <em>Jack lept in the air, spun around 360 degrees, and then started dancing on the spot!</em></li>
 	<li><strong>INSERT IMAGE  - Show Don''t Tell</strong></li>
</ul>
&nbsp;

<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Describe your character using a <strong>simile </strong>
<ul>
 	<li><em>She was as graceful as a swan gliding through the water on a lake.</em></li>
</ul>
</td>
</tr>
</tbody>
</table>');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  Draw and label the setting/character </span></strong><span style="color: #000000">with as much detail as you can.  Use your drawing to help you add detail when writing your opening.</span>

&nbsp;

<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Include some or all of the <strong>5Ws</strong> (who, when, where, what, why) in your introduction.
<ul>
 	<li><em>The rickety abandoned <span style="text-decoration: underline">house</span> stood at the <span style="text-decoration: underline">top of the grassy hill</span>, surrounded by overgrown shrubs and a crooked wooden fence with a broken gate, which hung on one hinge.  No one dared to enter the gate.  <span style="text-decoration: underline">No one had been inside the house</span> for 100 years.  <span style="text-decoration: underline">It was thoughts to be haunted</span>. </em></li>
</ul>
</td>
<td width="4%"></td>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Begin with one of the following:
<ul>
 	<li><strong>Dialogue: </strong>"<em>Come with me, but don''t ask where we''re going</em>."</li>
 	<li><strong>A surprising fact:</strong> <em>I was born 200 years ago. </em></li>
 	<li><strong>Something funny:</strong> <em>I came last in the race.  Well, there has to be a first time for everything. </em></li>
 	<li><strong>Talk to the reader: </strong>"<em>You probably won''t believe me when I tell you</em>..."</li>
 	<li><strong>A</strong> <strong>sad fact: </strong><em>I have been poor my whole life.</em></li>
</ul>
</td>
</tr>
</tbody>
</table>');
INSERT INTO strategies(strategy_Desc) VALUES ('<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Stay on Topic Strategy:  </strong>Read your writing and <strong>cross out</strong> anything that is not about the <strong>main idea.</strong>

&nbsp;

<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>PASTA</strong> <strong>prompt: </strong>Complete a PASTA prompt based on a piece of writing.  It will help you narrow your idea and stay focused by looking at the five elements of style and voice.  See the examples below.

<img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Narrow%20Ideas/PASTA%20Prompt.PNG" width="97%"  />');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>For <strong>narrative</strong> or <strong>recount</strong> writing start a new paragraph when the following changes:
<ul>
 	<li><strong>Topic</strong>: When you''re talking about a new idea start a new paragraph. (<em>I went for a bike ride with my friend</em>).</li>
 	<li><strong>Time</strong>: When the time changes (<em>Later that day, The next day, On Monday, In the morning</em>).</li>
 	<li><strong>Place</strong>: When the setting or place changes (<em>Back at the farm...</em>).</li>
 	<li><strong>Person</strong>: If you''re introducing a new person, or a new person is speaking change paragraphs.</li>
</ul>
<img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Paragraphing/Student%20Example.png" width="100%"  />

&nbsp;</td>
<td width="4%"></td>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>For <strong>Informational</strong> writing, start a new paragraph when the topic changes.  Each paragraph should have a topic sentence and supporting details.

Most non-fiction paragraphs have three parts:
<ol>
 	<li>Topic sentence or what the paragraph is about.</li>
 	<li>Details about the topic.</li>
 	<li>An example or evidence.</li>
</ol>
<img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Paragraphing/Information%20text%20example.png" width="100%"  /></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>You can add more meaning to your ideas by adding information before or after the noun or verb.  This is called expanding a noun phrase or verb phrase.

*The noun phrase is underlined.

<strong>Narrative/Recount</strong>
<ul>
 	<li><strong>Noun phrase:</strong> <em>I saw <span style="text-decoration: underline">their neighbour</span>. </em></li>
 	<li><strong>Expanded noun phrase: </strong>My friend''s elderly neighbour is very friendly and always says hello.</li>
</ul>
<strong>Information Text</strong>
<ul>
 	<li><strong>Noun phrase:</strong> Y<em>ou can walk to <span style="text-decoration: underline">the island</span>.</em></li>
 	<li><strong>Expanded noun phrase:</strong> <em>At sunrise, during low tide, you can walk to the island.</em></li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Make a <strong>five senses organiser</strong> to describe people, places and actions (see, hear, smell, feel, taste).

&nbsp;

<img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Elaborating%20Ideas/Level%202-4.png" width="100%"  /></td>
<td width="4%"></td>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" /> Show don''t Tell: </span></strong><span style="color: #000000">Describe what is happening or how people are feeling rather than telling.  For example, instead of ''</span><span style="color: #000000"><em>She was really angry'', </em>better to write, <em>''Sam pounded her fists on the table.</em></span>

<img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Elaborating%20Ideas/Level%201-2.png" width="95%"  /></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<h6><strong>Making sentences longer</strong></h6>
<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" /> </span></strong><span style="color: #000000"> Combine two short sentences using a conjunction (for, and, because, but, or, nor, yet, so)</span>
<ul>
 	<li><strong>Instead of:</strong> <em>Nick had to leave. His friend was waiting for him.</em></li>
 	<li><strong>Try:</strong> <i>Nick had to leave <strong>because</strong> his friend was waiting for him.</i></li>
</ul>
<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong><span style="color: #000000">Start sentences with a subordinating conjunction (As, After, Although, When, While, Until, Because, Before, If, Since)</span>
<ul>
 	<li><em><strong>While</strong> her parents slept, Mary snuck into the basement.</em></li>
</ul>
<img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Different%20types%20of%20Sentences/AAAWWUBBIS.png" width="100%"  /></td>
<td width="4%"></td>
<td valign="top" width="48%">&nbsp;

<img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Different%20types%20of%20Sentences/Compound%20Sentences.png" width="100%"  />

&nbsp;

&nbsp;</td>
</tr>
</tbody>
</table>
<h6><strong>Making sentences shorter</strong></h6>
<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong><span style="color: #000000">Add a one, two or three word phrases between long sentences for effect.</span>
<ul>
 	<li>That''s insane!  Can you believe that? Woosh! Fabulous! Wow!</li>
</ul>
<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Create a short noun and verb phrase.
<ul>
 	<li>He frowned.  She bolted.  They left.  Wind whistled.  Branches waved.  Babies cried.  People cheered.</li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Use <strong>Show don''t Tell</strong> to make your middle longer.  Describe what is happening or how people are feeling rather than telling. For example:
<ul>
 	<li><strong>Telling: </strong>''<em>He ran fast.''</em></li>
 	<li><strong>Showing: </strong><em>''Sam bolted down the street, not looking behind him.  His heart was pounding and sweat dripped down his red face.''</em></li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<h3 style="text-align: center"><strong>Punctuation Rules and Examples</strong></h3>
<img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Punctuation/Level%204%20punctuation.png" width="100%"  />');
INSERT INTO strategies(strategy_Desc) VALUES ('Connectives List:
<ul>
 	<li><strong>Time</strong>: later, before, meanwhile, since.</li>
 	<li><strong>Adding information</strong>: also, too, and, in addition, furthermore.</li>
 	<li><strong>Opposing view</strong>: However, anyway, yet, whilst.</li>
 	<li><strong>List</strong>: To begin with, second(ly), third(ly), finally.</li>
 	<li><strong>Explaining</strong>:  In other words, For instance, For example.</li>
 	<li><strong>Contrast ideas</strong>: although, yet, but, besides.</li>
</ul>');
INSERT INTO strategies(strategy_Desc) VALUES ('tbc');
INSERT INTO strategies(strategy_Desc) VALUES ('Different ways to begin sentences:
<ul>
 	<li><strong>Adjective: </strong><em><span style="text-decoration: underline">Red</span> flowers appeared on my doorstep. </em></li>
 	<li><strong>Proper noun: </strong><em><span style="text-decoration: underline">Danny</span> rushed through the door. </em></li>
 	<li><strong>Adverb: </strong><span style="text-decoration: underline">Quietly</span>, she took a seat in the library.</li>
 	<li><strong>Sequence</strong>: Next, Then, Later on, After that, Before long</li>
 	<li><strong>Conjunctions</strong>: After, Although, As, While, When, As, Until, Because, Before, If, Since, Now, Once, But</li>
 	<li><strong>Pronouns</strong>: I, We, He, She, They, Our</li>
</ul>
&nbsp;

Look at other texts from good authors and <strong>imitate</strong> the different types of sentence beginnings (Despite, Actually, If only).');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>As you write, you need to think about when events occur and what tense you will use.  See the examples below:
<ul>
 	<li><strong>Past Tense: </strong>Use this if the events happened in the past.  <em>John <span style="text-decoration: underline">ran</span> as fast as he <span style="text-decoration: underline">could</span> to the shop before it <span style="text-decoration: underline">closed</span>. </em></li>
 	<li><strong>Present Tense</strong>: Use this if events are happening now. John <span style="text-decoration: underline">runs</span> as fast as he <span style="text-decoration: underline">can</span> to the shop before it <span style="text-decoration: underline">closes</span>.</li>
 	<li><strong>Future Tense</strong>: Use this if events happen later.  John <span style="text-decoration: underline">will need to run</span> as <span style="text-decoration: underline">fast</span> as he can to the shop before it <span style="text-decoration: underline">closes</span>.</li>
</ul>
</td>
<td width="4%"></td>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Have a go at adding words in the <span style="text-decoration: underline">correct tense</span> to the sentences below.

&nbsp;

Sarah ……………………………….... to the party. <strong>(<i>Past)</i></strong>

Sarah …………………………………. to the party. <strong>(</strong><em><strong>Present)</strong></em>

Sarah …………………………………. to the party. <strong>(<i>Future)</i></strong></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Read your writing and underline any general nouns and verbs. See if you can change them to make them more specific. See the example below.
<ul>
 	<li><strong>Nouns</strong> are people, places, things, and ideas.</li>
 	<li><strong>Verbs</strong> are actions.</li>
</ul>
</td>
<td width="4%"></td>
<td valign="top" width="48%"></td>
</tr>
</tbody>
</table>');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>One Sentence Summary: </strong>This strategy helps you explain in one sentence the author''s purpose and the main idea.</td>
<td width="4%"></td>
<td width="48%"><img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Retelling%20and%20Summarising/Main%20Idea%20Summary.png" width="100%"  /></td>
</tr>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  4 </span>Questions</strong>: Answer four questions as concisely as you can to find and organise the main ideas for your summary.</td>
<td width="4%"></td>
<td valign="top" width="48%"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Retelling%20and%20Summarising/Monarch%20Butterfly.png" width="100%"  /></td>
</tr>
</tbody>
</table>');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Find different and more interesting words (<strong>synonym</strong>) that mean the same thing.  Use a thesaurus or synonym list to help you.
<ul>
 	<li><em>She put on her <del>red</del> shoes.  (ordinary)</em></li>
 	<li><em>She put on her ruby shoes</em>. (interesting)</li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Underline all the general nouns and verbs in your writing and replace them with <strong>precise</strong> <strong>nouns</strong> and <strong>verbs</strong>.
<ul>
 	<li>The flowers hung down in the sun. (general)</li>
 	<li>The <span style="text-decoration: underline">roses</span> <span style="text-decoration: underline">wilted</span> in the sun. (precise)</li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Create a list of <strong>topic-specific words</strong> for people, places and things.  Use these words in your writing.
<ul>
 	<li>Zoo: enclosure, habitat, endangered, camouflage.</li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Preposition:</strong>  A preposition or prepositional phrase shows the relationship between a noun and another word.</td>
<td width="4%"></td>
<td width="48%"><img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Different%20types%20of%20Sentences/Prepositions.png" width="100%"  /></td>
</tr>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Complex Sentences:</strong> Complex sentences contain an independent and subordinate (dependent) clause.  The subordinate clause does not make sense on its own, and needs the independent clause to complete the sentence. Use words from the acronym AAAWWUBBIS to create complex sentences.</td>
<td width="4%"></td>
<td valign="top" width="48%"><img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Different%20types%20of%20Sentences/AAAWWUBBIS.png" width="100%"  />

<img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Different%20types%20of%20Sentences/Complex%20Sentence.png" width="100%"  />

*The underlined parts begin with a subordinating conjunction and do not make sense on their own.</td>
</tr>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Compound Sentences:</strong> Join one or more ideas within a sentence using a coordinating conjunction. To remember the conjunctions, think of the acronym FANBOYS (for, and, nor, but, or, yet, so). <em>I like skiing <strong>and</strong> snowboarding.</em></td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('tbc');
INSERT INTO strategies(strategy_Desc) VALUES ('<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" /> </span>Memorable last line</strong>: Make sure the main problem is resolved and then end with an interesting last line that leaves the         reader satisfied.
<ul>
 	<li><strong>Circular ending: </strong>The story ends with something familiar from the beginning. This can be the same last line or same event occurring.</li>
 	<li><strong>Question: </strong>End with a question to make the reader wonder.</li>
 	<li><strong><em>Dialogue: </em></strong><em>E.g., </em><em>Before she left, she turned to her brother and said, "If I come back, I''ll tell you the whole truth</em>."</li>
 	<li><strong>F</strong><em><strong>unny: </strong>End with a funny thought or scene. </em></li>
 	<li><em><strong>Cliffhanger: </strong></em>This ending leaves the reader asking questions or wanting more. <em> E.g.  Sia made it back home safe, but she wasn''t alone.  </em></li>
 	<li><em><strong>S</strong></em><em><strong>urprise:</strong> Jack opened his eyes and everything was black. </em></li>
 	<li><strong>Describe a</strong> <strong>scene: </strong><em>Sarah curled up in her bed and fell fast asleep, without a worry in the world. </em></li>
</ul>');
INSERT INTO strategies(strategy_Desc) VALUES ('Try to create your own original figurative language, rather than something common and cliche.  See below.
<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong>Simile</strong>: Compares two things using the words ''like'' or ''as''.

<em>E.g. It was as cold as my breakfast this morning.</em></td>
<td width="4%"></td>
<td width="48%"><strong>Metaphor</strong>: It compares two things <span style="text-decoration: underline">without</span> using the words like or as.

<em>E.g. My Aunt <span style="text-decoration: underline">is</span> a dragon.  The house <span style="text-decoration: underline">was</span> a zoo.</em></td>
</tr>
<tr>
<td valign="top" width="48%"><strong>Hyperbole</strong>: Exaggerating to make a point.

<em>E.g. I have <u>50 million </u>things to do.  My shoes are slowly <span style="text-decoration: underline">killing</span> me.</em></td>
<td width="4%"></td>
<td width="48%"><strong>Alliteration</strong>: Words that start with the same sound are used repeatedly to create rhythm and fluency.

<em>E.g. <span style="text-decoration: underline">Faint</span> <span style="text-decoration: underline">footsteps</span> <span style="text-decoration: underline">followed</span> me.  <span style="text-decoration: underline">Penny</span> was a <span style="text-decoration: underline">precious</span> child.</em></td>
</tr>
<tr>
<td valign="top" width="48%"><strong>Onomatopoeia</strong>: A word that mimics a sound.

<em>E.g. </em><em><span style="text-decoration: underline">Pitter patter</span>! Waves <span style="text-decoration: underline">crashed</span> against the rocks</em>.</td>
<td width="4%"></td>
<td width="48%"><strong>Personification: </strong>When objects are given human qualities.

<em>E.g. Autumn leaves <span style="text-decoration: underline">danced</span> across the street.  His grumbling stomach was <span style="text-decoration: underline">begging</span> for food.</em></td>
</tr>
<tr>
<td valign="top" width="48%"><strong>Oxymoron</strong>: Words that are opposite or contradict each other.

E.g. <em>We have a <span style="text-decoration: underline">love-hate</span> relationship. It was <span style="text-decoration: underline">seriously funny</span>.</em></td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Criteria and Rubrics</strong>: Ask your teacher for set criteria or a rubric to guide you as you write and revise.  The criteria will vary depending on the purpose and text type (narrative, poem).

<img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Revision%20and%20Editing/Criteria%20or%20Rubric.png" width="68%"  /></td>
<td width="4%"></td>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  Rest and </span>Revisit</strong>:  Don''t revise and edit in one go.  Take breaks so you can look at your writing with fresh eyes. You''ll be amazed at how much easier and clearer the revision process is when you''ve stepped away from your writing.</td>
</tr>
</tbody>
</table>
<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" /> </span>Peer Feedback</strong>: Have a peer read your writing and ask you questions from the list below.  Ask them to put a symbol

(<img class="alignnone" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Revision%20and%20Editing/smiley%20face.jpg" width="18"  />+ - ?) next to the parts they like, want to know more of, less of, and what parts confuse them.

<img class="alignleft" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Revision%20and%20Editing/Peer%20Feedback%20L3-6.png" width="75%"  />

&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>List interesting facts about your character:
<ul>
 	<li><em><strong>Personality</strong> </em>(<em>angry, calm, giving</em>)</li>
 	<li>Interesting <strong>P</strong><em><strong>hysical features</strong></em> (<em>she has wiry grey hair that sticks out in all directions</em>)</li>
 	<li>How are they <em><strong>connected to other characters</strong></em> (brother, best friend)</li>
 	<li>Interesting facts about their <em><strong>past </strong>(He never smiled, not even as a child). </em></li>
</ul>
<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Describe your character''s actions and emotions using ''<strong>Show don''t Tell</strong>''.
<ul>
 	<li>Telling: <em>Dad was very happy.</em></li>
 	<li><em>Showing: Dad lept in the air, spun around 360 degrees, and then started dancing on the spot!</em></li>
</ul>
</td>
<td width="4%"></td>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Read the first paragraph of popular novels by great authors, study what they do and <strong>imitate their character descriptions</strong>.  Do not copy, just borrow ideas.
<ul>
 	<li>For example, <em>He was a big, beefy man with hardly any neck</em> - J.K. Rowling, Harry Potter.
<ul>
 	<li>Your version might be: <em>She was a frail, old lady who barely moved</em>.</li>
</ul>
</li>
</ul>
</td>
</tr>
</tbody>
</table>');
INSERT INTO strategies(strategy_Desc) VALUES ('<table style="height: 330px" width="878">
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  Imitate others</span></strong>

Read the first paragraph of popular novels by great authors, study what they do and imitate their <strong>sentence structures </strong>and <strong>character descriptions</strong>.  Do not copy, just borrow ideas.

<strong>For example:</strong> <em>He was a big, beefy man with hardly any neck</em> - J.K. Rowling, Harry Potter.

<strong>Your version might be:</strong> <em>She was a frail, old lady who barely moved</em>.</td>
<td width="4%"></td>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  Hook the reader </span></strong><span style="color: #000000">with one of the following:</span>
<ul>
 	<li><strong><span style="color: #000000">Dialogue</span></strong></li>
 	<li><strong><span style="color: #000000">A surprising fact</span></strong></li>
 	<li><strong><span style="color: #000000">Something funny / talk to the reader </span></strong><span style="color: #000000">("You probably won''t believe me when I tell you...")</span></li>
 	<li><strong><span style="color: #000000">A sad fact </span></strong><span style="color: #000000">(I have been poor my whole life.)</span></li>
</ul>
</td>
</tr>
</tbody>
</table>');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Modal Words</strong>: To make your opinion in your writing clear and persuasive, choose words that are high or low modality.   This makes your reader know exactly how you feel about a topic.
<ul>
 	<li>''We <strong><em>must</em> </strong>stop climate change <strong><em>now</em></strong>.''  <i>- </i>High modality.</li>
 	<li>''<em><strong>Maybe</strong> </em>we <em><strong>could</strong> </em>start doing something about climate change <em><strong>soon</strong></em>.'' - Low modality.</li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Modality/Mod%20lower%20levels.png" width="100%"  /></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>For <strong>narrative</strong> or <strong>recount</strong> writing start a new paragraph when the following changes:
<ul>
 	<li><strong>Topic</strong>: When you''re talking about a new idea start a new paragraph. (<em>I went for a bike ride with my friend</em>).</li>
 	<li><strong>Time</strong>: When the time changes (<em>Later that day, The next day, On Monday, In the morning</em>).</li>
 	<li><strong>Place</strong>: When the setting or place changes (<em>Back at the farm...</em>).</li>
 	<li><strong>Person</strong>: If you''re introducing a new person, or a new person is speaking change paragraphs.</li>
</ul>
<img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Paragraphing/Student%20Example.png" width="100%"  /></td>
<td width="4%"></td>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>For <strong>Informational</strong> writing, start a new paragraph when the topic changes.  Each paragraph should have a topic sentence and supporting details.

Most non-fiction paragraphs have three parts:
<ol>
 	<li>Topic sentence or what the paragraph is about.</li>
 	<li>Details about the topic.</li>
 	<li>An example or evidence.</li>
</ol>
&nbsp;</td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Show don''t Tell:</strong> Describe what is happening or how people are feeling rather than telling.
<ul>
 	<li><strong>Telling:</strong>  ''<em>She was really angry''</em></li>
 	<li><strong>Showing:</strong><em> ''Sam pounded her fists on the table.''</em></li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Rule of Three:</strong> Describe something with <span style="text-decoration: underline">three</span> details.
<ul>
 	<li><em>It was a wet, dark and windy day''. ''When I closed my eyes, I heard the <span style="text-decoration: underline">wind howling</span>, <span style="text-decoration: underline">children laughing</span> and <span style="text-decoration: underline">dogs barking</span> in the distance''. </em></li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Snapshot:  </strong>Write down every detail, as it happens, to highlight an important moment.
<ul>
 	<li>''Tom<em> cautiously looked over his left shoulder and without drawing attention to himself, slowly picked up the bag.  With his eyes fixed on the front door, and heart-pounding, he gently unzipped the backpack</em>''.</li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<h6><strong>Making sentences longer</strong></h6>
<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" /> </span></strong><span style="color: #000000"> Combine two short sentences using a conjunction (for, and, because, but, or, nor, yet, so)</span>
<ul>
 	<li><strong>Instead of:</strong> <em>Nick had to leave. His friend was waiting for him.</em></li>
 	<li><strong>Try:</strong> <i>Nick had to leave <strong>because</strong> his friend was waiting for him.</i></li>
</ul>
<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong><span style="color: #000000">Start sentences with a subordinating conjunction (As, After, Although, When, While, Until, Because, Before, If, Since)</span>
<ul>
 	<li><em><strong>While</strong> her parents slept, Mary snuck into the basement.</em></li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
</tbody>
</table>
<h6><strong>Making sentences shorter</strong></h6>
<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong><span style="color: #000000">Add a one, two or three word phrases between long sentences for effect.</span>
<ul>
 	<li>That''s insane!  Can you believe that? Woosh! Fabulous! Wow!</li>
</ul>
<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Create a short noun and verb phrase.
<ul>
 	<li>He frowned.  She bolted.  They left.  Wind whistled.  Branches waved.  Babies cried.  People cheered.</li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('Use the following strategies to make your middle or important parts longer and more descriptive.
<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong><strong>Show don''t Tell: </strong>Describe what is happening or how people are feeling rather than telling. Use can use a thesaurus to help you find the right word.
<ul>
 	<li><strong>Telling: </strong>''<em>He ran fast.''</em></li>
 	<li><strong>Showing: </strong><em>''Sam bolted down the street, not looking behind him.  His heart was pounding and sweat dripped down his red face.''</em></li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Rule of Three:</strong> Describe something with three details.

E.g. <em>''It was a wet, dark and windy day''. ''When I closed my eyes, I heard the <span style="text-decoration: underline">wind howling</span>, <span style="text-decoration: underline">children laughing</span><span style="text-decoration: underline"> and </span><span style="text-decoration: underline">dogs barking</span> in the distance''. </em></td>
<td width="4%"></td>
<td width="48%"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Elaborating%20Ideas/text%20example%201.png" width="100%"  /></td>
</tr>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Snapshot:  </strong>Write down every detail to highlight an important moment.

E.g. ''Tom<em> cautiously looked over his left shoulder and without drawing attention to himself, slowly picked up the bag.  With his eyes fixed on the front door, and heart-pounding, he gently unzipped the backpack</em>''.</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<h3 style="text-align: center"><strong>Punctuation Rules and Examples</strong></h3>
<img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Punctuation/L5.png" width="100%" />');
INSERT INTO strategies(strategy_Desc) VALUES ('Connectives List:
<ul>
 	<li><strong>Time</strong>: later, before, meanwhile, since.</li>
 	<li><strong>Adding information</strong>: also, too, and, in addition, furthermore.</li>
 	<li><strong>Opposing view</strong>: However, anyway, yet, whilst.</li>
 	<li><strong>List</strong>: To begin with, second(ly), third(ly), finally.</li>
 	<li><strong>Explaining</strong>:  In other words, For instance, For example.</li>
 	<li><strong>Compare </strong>and <strong>c</strong><strong>ontrast ideas</strong>: although, yet, but, similarly.</li>
</ul>');
INSERT INTO strategies(strategy_Desc) VALUES ('tbc');
INSERT INTO strategies(strategy_Desc) VALUES ('Different ways to begin sentences:

<strong>Adjective: </strong><em><span style="text-decoration: underline">Red</span> flowers appeared on my doorstep. </em>

<strong>Proper noun: </strong><em><span style="text-decoration: underline">Danny</span> rushed through the door. </em>

<strong>Adverb: </strong><span style="text-decoration: underline">Quietly</span>, she took a seat in the library.

<strong>Sequence/Time</strong>: Next, Then, Later on, After that, Earlier, Simultaneously, Before long, Previously, In time

<strong>Conjunctions</strong>: After, Although, As, While, As, Because, Before, Until, If, Since, Now, Once, But

<strong>Pronouns</strong>: I, We, He, She, They, Our

&nbsp;

Look at other similar text types from good authors and <strong>imitate</strong> the different types of sentence beginnings (Despite, Actually, If only, Apparently, Suddenly).');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>If a sentence is stating that a <strong>noun</strong> has ownership of an <strong>object</strong>, it is called a <strong>possessive noun</strong>.

&nbsp;

For <span style="text-decoration: underline">singular</span> and <span style="text-decoration: underline">plural</span> nouns that do not end in s, add an <span style="text-decoration: underline">apostrophe + s</span>.
<ul>
 	<li>My <strong>dog''s</strong> kennel is wooden.</li>
 	<li><strong>Earth''s</strong> atmosphere is polluted.</li>
 	<li>The <strong>children''s</strong> playground is empty.</li>
</ul>
For nouns that end in s,  add an <span style="text-decoration: underline">apostrophe after the s</span>.
<ul>
 	<li>All the <strong>dogs''</strong> leashes were missing.</li>
 	<li>We''re having a <strong>girls''</strong> night in.</li>
 	<li>Miss <strong>Jones''</strong> house is large.</li>
</ul>
</td>
<td width="4%"></td>
<td valign="top" width="48%"></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Read your writing and underline any general nouns and verbs. See if you can change them to make them more specific.
<ul>
 	<li><strong>Nouns</strong> are people, places, things, and ideas.</li>
 	<li><strong>Verbs</strong> are actions.</li>
</ul>
</td>
<td width="4%"></td>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Use <strong>topic specific</strong> words to make you sound like an expert and enhance meaning for the reader.  Brainstorm a list of words related to the topic you are writing about. Use these words in your writing.</td>
</tr>
</tbody>
</table>');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" /> </span>Sequence &amp; GIST</strong>: Put key events in order and then summarise each with a GIST summary.

<img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Retelling%20and%20Summarising/Text%20Summary.png" width="100%"  /></td>
<td width="4%"></td>
<td width="48%">Sequence <span style="text-decoration: underline">key</span> ideas from the text in <span style="text-decoration: underline">numerical order</span> or <span style="text-decoration: underline">by topic</span>.  Use your words and topic words from the text and rewrite each part with a <strong>GIST summary</strong>.  A GIST summary is very short and summarises the main idea of a sentence in one word/phrase. Do not include your opinion or how you feel about the text.

See example:

<img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Retelling%20and%20Summarising/GIST%20ANALYSIS.png" width="100%"  />

&nbsp;</td>
</tr>
</tbody>
</table>');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Find different and more interesting words (<strong>synonyms</strong>) that mean the same thing.  Use a thesaurus or synonym list.
<ul>
 	<li><em>She put on her <del>red</del> shoes. (ordinary)</em></li>
 	<li><em>She <span style="text-decoration: underline">slipped</span> into her <span style="text-decoration: underline">ruby</span> shoes</em>. (interesting)</li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Underline all the general nouns and verbs in your writing and replace them with <strong>precise nouns</strong> and <strong>verbs</strong>
<ul>
 	<li>The flowers hung down in the sun. (general)</li>
 	<li>The <span style="text-decoration: underline">roses</span> <span style="text-decoration: underline">wilted</span> in the sun. (precise)</li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Create a list of <strong>topic-specific words</strong> for people, places and things.  Use these words in your writing.
<ul>
 	<li>Zoo: enclosure, habitat, endangered, camouflage.</li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Complex Sentences:</strong> Complex sentences contain an independent and subordinate (dependent) clause.  The subordinate clause does not make sense on its own, and needs the independent clause to complete the sentence.  Use words from the acronym <strong>AAAWWUBBIS</strong> to create complex sentences.

&nbsp;
<p style="text-align: center"><strong>After   Although   As   When   While   Until   Because   Before   If   Since       </strong></p>
</td>
<td width="4%"></td>
<td valign="top" width="48%"><img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Different%20types%20of%20Sentences/Complex%20Sentences%20L5_7.png" width="100%"  />

*In the BEFORE column, underline the <span style="color: #ff6600"><strong>dependent </strong></span>and <strong><span style="color: #339966">independent</span> </strong>clauses.  The first one is done for you.</td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('tbc');
INSERT INTO strategies(strategy_Desc) VALUES ('<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" /> </span>Memorable last line</strong>: Make sure the main problem is resolved and then end with an interesting last line.
<ul>
 	<li><strong>Circular ending: </strong>The story ends with the same/similar line from the beginning.</li>
 	<li><strong>Question:  </strong>End with a question to make the reader think.</li>
 	<li><strong><em>Dialogue:  </em></strong><em>Before she left, she turned to her brother and said, "If I come back, I''ll tell you the whole truth</em>."</li>
 	<li><strong>Funny</strong>:  <em>End with a funny thought or scene. </em></li>
 	<li><em><strong>A cliffhanger: </strong></em>Leave the reader asking questions or wanting more. <em> E.g.  Sia made it back home safe, but she wasn''t alone.</em></li>
 	<li><strong><em>A</em></strong> <strong>s</strong><em><strong>urprise: </strong>Jack opened his eyes and everything was black</em>.</li>
 	<li><strong>Describe a</strong> <strong>scene: </strong> Use Show don''t Tell to add detail.  <em>She slipped the diamond ring on her boney finger, and moved her hand from side to side as the light reflected and bounced in all directions, creating a dazzling sparkle</em>.</li>
 	<li><strong>Moral or lesson</strong>: Your <strong>characters</strong> have changed or have learned a lesson.  For example, by the end of a story, a selfish cold-hearted character gives a homeless person some spare change.  This act shows the character has changed and is very satisfying for a reader.</li>
</ul>');
INSERT INTO strategies(strategy_Desc) VALUES ('Try to create your own original figurative language, rather than something common and cliche.  See below.
<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong>Simile</strong>: Compares two things using the words ''like'' or ''as''.

<em>E.g. It was as cold as my breakfast this morning.</em></td>
<td width="4%"></td>
<td width="48%"><strong>Metaphor</strong>: It compares two things <span style="text-decoration: underline">without</span> using the words like or as.

<em>E.g. My Aunt <span style="text-decoration: underline">is</span> a dragon.  The house <span style="text-decoration: underline">was</span> a zoo.</em></td>
</tr>
<tr>
<td valign="top" width="48%"><strong>Hyperbole</strong>: Exaggerating to make a point.

<em>E.g. I have <u>50 million </u>things to do.  My shoes are slowly <span style="text-decoration: underline">killing</span> me.</em></td>
<td width="4%"></td>
<td width="48%"><strong>Alliteration</strong>: Words that start with the same sound are used repeatedly to create rhythm and fluency.

<em>E.g. <span style="text-decoration: underline">Faint</span> <span style="text-decoration: underline">footsteps</span> <span style="text-decoration: underline">followed</span> me.  <span style="text-decoration: underline">Penny</span> was a <span style="text-decoration: underline">precious</span> child.</em></td>
</tr>
<tr>
<td valign="top" width="48%"><strong>Onomatopoeia</strong>: A word that mimics a sound.

<em>E.g. </em><em><span style="text-decoration: underline">Pitter patter</span>! Waves <span style="text-decoration: underline">crashed</span> against the rocks</em>.</td>
<td width="4%"></td>
<td width="48%"><strong>Personification: </strong>When objects are given human qualities.

<em>E.g. Autumn leaves <span style="text-decoration: underline">danced</span> across the street.  His grumbling stomach was <span style="text-decoration: underline">begging</span> for food.</em></td>
</tr>
<tr>
<td valign="top" width="48%"><strong>Oxymoron</strong>: Words that are opposite or contradict each other.

<em>E.g. We have a <span style="text-decoration: underline">love-hate</span> relationship. It was <span style="text-decoration: underline">seriously funny</span>.</em></td>
<td width="4%"></td>
<td width="48%"><strong>Irony</strong>: Words that mean the opposite of what you think. It can sometimes sound like sarcasm.

<em>E.g. Wow, I <span style="text-decoration: underline">can''t wait</span> for that test! That meal was <span style="text-decoration: underline">soooo</span> delicious.  I just <span style="text-decoration: underline">love it</span> when dogs drool on me.</em></td>
</tr>
<tr>
<td valign="top" width="48%"><strong>Allusion</strong>: An illusion makes a reference to something that most people understand.  It''s often used in a simile or metaphor.

<em>E.g. It will sink, like the <span style="text-decoration: underline">Titanic</span>.  She is such a <span style="text-decoration: underline">Scrooge</span> and never offers to pay.  Chocolate is my <span style="text-decoration: underline">kryptonite</span>.</em></td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Criteria and Rubrics</strong>: Ask your teacher for set criteria or a rubric to guide you as you write and revise.  The criteria will vary depending on the purpose and text type (narrative, poem).

<img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Revision%20and%20Editing/Criteria%20or%20Rubric.png" width="68%"  /></td>
<td width="4%"></td>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  Rest and </span>Revisit</strong>:  Don''t revise and edit in one go.  Take breaks so you can look at your writing with fresh eyes. You''ll be amazed at how much easier and clearer the revision process is when you''ve stepped away from your writing.</td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Read the first paragraph of popular novels by great authors, study what they do and <strong>imitate their character descriptions</strong>.  Do not copy, just borrow ideas.

<strong>For example:</strong> <span style="color: #993300"><em>He was a big, beefy man with hardly any neck</em> <span style="color: #000000">- J.K. Rowling, Harry Potter.</span>  </span>

<span style="color: #993300"><strong><span style="color: #000000">Your version might be:</span></strong>  <em>She was a frail, old lady who barely moved</em>.</span></td>
<td width="4%"></td>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Focus on one important/interesting fact </strong>and build on it with additional information. E.g.  <span style="color: #993300"><em>Danny wore shorts all year round - even in winter.  He said he never felt the cold, but the truth was, they were so poor, he could only buy long pants once every three years.  If only he could stop growing, just for one year.</em></span></td>
</tr>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>List interesting facts about your character - <em><strong>Personality</strong> </em>(angry, calm, giving), <em><strong>physical</strong> <strong>features</strong></em> (interesting things like, <span style="color: #993300"><em>she had wiry grey hair that stuck out in all directions</em></span>), how are they <em><strong>connected to other characters</strong></em> (younger brother, best friend), interesting facts about their <em><strong>past </strong>(He never smiled, not even as a child). </em></td>
<td width="4%"></td>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Include a <strong>flashback</strong> about your character to describe their motivations.  <span style="color: #993300"><em>Claire froze, as ocean water crept towards her toes.  Her heart pounded.  She remembered falling in a lake near her grandparents home as a child.</em> </span></td>
</tr>
</tbody>
</table>');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Read the first paragraph of popular novels by great authors, study what they do and <strong>imitate their sentence structures and character descriptions</strong>.  Do not copy, just borrow ideas.

<strong>For example:</strong> <em>He was a big, beefy man with hardly any neck</em> - J.K. Rowling, Harry Potter.

<strong>Your version might be:</strong> <em>She was a frail, old lady who barely moved</em>.</td>
<td width="4%"></td>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong><span style="color: #000000">Begin with one of the following:</span>
<ul>
 	<li><strong><span style="color: #000000">Dialogue</span></strong></li>
 	<li><strong><span style="color: #000000">A surprising fact</span></strong></li>
 	<li><strong><span style="color: #000000">Something funny, talk to the reader </span></strong><span style="color: #000000">("You probably won''t believe me when I tell you...")</span></li>
 	<li><strong><span style="color: #000000">A sad fact </span></strong><span style="color: #000000">(I have been poor my whole life.)</span></li>
</ul>
</td>
</tr>
</tbody>
</table>');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Modal Words</strong>: To make your opinion in your writing clear and persuasive, choose words that are high or low modality.   This makes your reader know exactly how you feel about a topic.
<ul>
 	<li>''We <strong><em>must</em> </strong>stop climate change <strong><em>now</em></strong>.''  <i>- </i>High modality.</li>
 	<li>''<em><strong>Maybe</strong> </em>we <em><strong>could</strong> </em>start doing something about climate change <em><strong>soon</strong></em>.'' - Low modality.</li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Modality/Mod%20lower%20levels.png" width="100%"  /></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>For <strong>narrative</strong> or <strong>recount</strong> writing start a new paragraph when the following changes:
<ul>
 	<li><strong>Topic</strong>: When you''re talking about a new idea start a new paragraph. (<em>I went for a bike ride with my friend</em>).</li>
 	<li><strong>Time</strong>: When the time changes (<em>Later that day, The next day, On Monday, In the morning</em>).</li>
 	<li><strong>Place</strong>: When the setting or place changes (<em>Back at the farm...</em>).</li>
 	<li><strong>Person</strong>: If you''re introducing a new person, or a new person is speaking change paragraphs.</li>
</ul>
</td>
<td width="4%"></td>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>For <strong>Informational</strong> writing, start a new paragraph when the topic changes.  Each paragraph should have a topic sentence and supporting details.Most non-fiction paragraphs have three parts:
<ol>
 	<li>Topic sentence or what the paragraph is about.</li>
 	<li>Details about the topic.</li>
 	<li>An example or evidence.</li>
</ol>
</td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Show don''t Tell:</strong> Describe what is happening or how people are feeling rather than telling.
<ul>
 	<li><strong>Telling:</strong>  ''<em>She was really angry''</em></li>
 	<li><strong>Showing:</strong><em> ''Sam pounded her fists on the table.''</em></li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Rule of Three:</strong> Describe something with <span style="text-decoration: underline">three</span> details.
<ul>
 	<li><em>It was a wet, dark and windy day''. ''When I closed my eyes, I heard the <span style="text-decoration: underline">wind howling</span>, <span style="text-decoration: underline">children laughing</span> and <span style="text-decoration: underline">dogs barking</span> in the distance''. </em></li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Snapshot:  </strong>Write down every detail, as it happens, to highlight an important moment.
<ul>
 	<li>''Tom<em> cautiously looked over his left shoulder and without drawing attention to himself, slowly picked up the bag.  With his eyes fixed on the front door, and heart-pounding, he gently unzipped the backpack</em>''.</li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('Use the following strategies to make your middle or important parts longer and more descriptive.
<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong><strong>Show don''t Tell: </strong>Describe what is happening or how people are feeling rather than telling. Use can use a thesaurus to help you find the right word.
<ul>
 	<li><strong>Telling: </strong>''<em>He ran fast.''</em></li>
 	<li><strong>Showing: </strong><em>''Sam bolted down the street, not looking behind him.  His heart was pounding and sweat dripped down his red face.''</em></li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Rule of Three:</strong> Describe something with three details.

E.g. <em>''It was a wet, dark and windy day''. ''When I closed my eyes, I heard the <span style="text-decoration: underline">wind howling</span>, <span style="text-decoration: underline">children laughing</span><span style="text-decoration: underline"> and </span><span style="text-decoration: underline">dogs barking</span> in the distance''. </em></td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Snapshot:  </strong>Write down every detail to highlight an important moment.

E.g. ''Tom<em> cautiously looked over his left shoulder and without drawing attention to himself, slowly picked up the bag.  With his eyes fixed on the front door, and heart-pounding, he gently unzipped the backpack</em>''.</td>
<td width="4%"></td>
<td width="48%"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Pacing/Text%20sample%20upper.png" width="100%"  /></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<h3 style="text-align: center"><strong>Punctuation Rules and Examples</strong></h3>
<img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Punctuation/L6.png" width="90%"  />');
INSERT INTO strategies(strategy_Desc) VALUES ('Connectives List:
<ul>
 	<li><strong>Time</strong>: Meanwhile, since.</li>
 	<li><strong>Adding information</strong>: in addition, furthermore.</li>
 	<li><strong>Opposing view</strong>: However, whilst, on the other hand.</li>
 	<li><strong>List</strong>: To begin with, in summary, on the whole.</li>
 	<li><strong>Explaining</strong>:  In other words, For instance, For example, equally important.</li>
 	<li><strong>Compare </strong>and <strong>c</strong><strong>ontrast</strong>: although, yet, alternatively, similarly, nevertheless.</li>
</ul>');
INSERT INTO strategies(strategy_Desc) VALUES ('tbc');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>If a sentence is stating that a <strong>noun</strong> has ownership of an <strong>object</strong>, it is called a <strong>possessive noun</strong>.

&nbsp;

For <span style="text-decoration: underline">singular</span> and <span style="text-decoration: underline">plural</span> nouns that do not end in s, add an <span style="text-decoration: underline">apostrophe + s</span>.
<ul>
 	<li>My <strong>dog''s</strong> kennel is wooden.</li>
 	<li><strong>Earth''s</strong> atmosphere is polluted.</li>
 	<li>The <strong>children''s</strong> playground is empty.</li>
</ul>
For nouns that end in s,  add an <span style="text-decoration: underline">apostrophe after the s</span>.
<ul>
 	<li>All the <strong>dogs''</strong> leashes were missing.</li>
 	<li>We''re having a <strong>girls''</strong> night in.</li>
 	<li>Miss <strong>Jones''</strong> house is large.</li>
</ul>
</td>
<td width="4%"></td>
<td valign="top" width="48%"></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Read your writing and underline any general nouns and verbs. See if you can change them to make them more specific.
<ul>
 	<li><strong>Noun: </strong> People, places, things, events or ideas.</li>
 	<li><strong>Verb:</strong> An action (running, shouting) or a state of being (content, relieved).</li>
</ul>
</td>
<td width="4%"></td>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Use <strong>topic specific</strong> words to make you sound like an expert and enhance meaning for the reader.  Brainstorm a list of words related to the topic you are writing about. Use these words in your writing</td>
</tr>
</tbody>
</table>');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Use words that express different <strong>shades of meaning</strong>.
<ul>
 	<li><em>She put on the red shoes. </em></li>
 	<li><em>She <u>squeezed</u> her <span style="text-decoration: underline">flat</span> feet into the <span style="text-decoration: underline">tiny ruby</span> shoes.</em>  This <em>shows</em> (not tells) the reader that she is determined to wear the shoes, even if they''re too big and hurt her feet.</li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" /></span></strong><span style="color: #000000">Use </span><strong><span style="color: #000000">specific nouns </span></strong><span style="color: #000000">and </span><strong><span style="color: #000000">verbs</span></strong><span style="color: #000000">:</span><span style="color: #000000"> The <span style="text-decoration: underline">crow</span> was <span style="text-decoration: underline">perched</span> on a tree <span style="text-decoration: underline">stump</span>.</span></td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Create a list of <strong>topic specific words</strong> for people, places and things.  E.g. Zoo: enclosure, habitat, endangered, camouflage.  Use these words in your writing.</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Use a <strong>thesaurus</strong> or <strong>synonym</strong> <strong>list</strong> to find more interesting words.</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%">
<p style="text-align: left"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Complex Sentences: </strong>Complex sentences contain an independent and subordinate (dependent) clause.  The subordinate clause does not make sense on its own, and needs the independent clause to complete the sentence.</p>
</td>
<td width="4%"></td>
<td valign="top" width="48%">Use the subordinating conjunctions list to create interesting complex sentences.

<img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Different%20types%20of%20Sentences/Subordinating%20Conjunctions.png" width="100%"  />

<img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Different%20types%20of%20Sentences/Sub%20Conjunction%20examples.png" width="100%"  />

&nbsp;</td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('tbc');
INSERT INTO strategies(strategy_Desc) VALUES ('<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" /> </span>Memorable last line</strong>: Make sure the main problem is resolved and then end with an interesting last line.
<ul>
 	<li><strong>Circular ending:  </strong>The story ends with the same/similar line from the beginning</li>
 	<li><strong>Question: </strong>End with a question to make the reader think. "<em>So, what are you going to do about climate change</em>?"</li>
 	<li><strong><em>Dialogue: </em></strong><em>Before she left, she turned to her brother and said, "If I ever come back, I''ll tell you the whole truth</em>."</li>
 	<li><strong>F</strong><em><strong>unny:  </strong>End with a funny thought or scene. </em></li>
 	<li><em><strong> A </strong></em><em><strong>cliffhanger:  </strong>Leave the reader asking questions or wanting more.  E.g.  Sia made it back home safe, but she wasn''t alone.                                                                                                                                                                                     </em></li>
 	<li><strong><em>A</em> s</strong><em><strong>urprise ending</strong>: Jack opened his eyes and everything was black</em>.</li>
 	<li><strong>D</strong><strong>escribe a</strong> <strong>scene: </strong> Using Show don''t Tell.  E.g., She slipped the diamond ring on her boney finger, and moved her hand from side to side as the light reflected and bounced in all directions, creating a dazzling sparkle.</li>
 	<li><strong>Moral or Lesson</strong>: Your characters have changed or have learned a lesson.  For example, by the end of a story, a selfish cold-hearted character gives a homeless person some spare change.  This act shows the character has changed and is very satisfying for a reader.  Remember to show, don''t tell.  For example, <em>Jack briskly walked passed a homeless man begging for money.  As annoyed pedestrians brushed past him, something compelled him to stop walking.  He took a deep breath, put his hand deep in his pocket and grabbed a handful of coins. </em></li>
</ul>');
INSERT INTO strategies(strategy_Desc) VALUES ('Try to create your own original figurative language, rather than something common and cliche.  See below.
<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong>Simile</strong>: Compares two things using the words ''like'' or ''as''.

<em>E.g. It was as cold as my breakfast this morning.</em></td>
<td width="4%"></td>
<td width="48%"><strong>Metaphor</strong>: It compares two things <span style="text-decoration: underline">without</span> using the words like or as.

<em>E.g. My Aunt <span style="text-decoration: underline">is</span> a dragon.  My <span style="text-decoration: underline">dinosaur</span> of a computer crashed again.</em></td>
</tr>
<tr>
<td valign="top" width="48%"><strong>Hyperbole</strong>: Exaggerating to make a point.

<em>E.g. I have <u>50 million </u>things to do.  My shoes are slowly <span style="text-decoration: underline">killing</span> me.</em></td>
<td width="4%"></td>
<td width="48%"><strong>Alliteration</strong>: Words that start with the same sound are used repeatedly to create rhythm and fluency.

<em>E.g. <span style="text-decoration: underline">Faint</span> <span style="text-decoration: underline">footsteps</span> <span style="text-decoration: underline">followed</span> me.  <span style="text-decoration: underline">Penny</span> was a <span style="text-decoration: underline">precious</span> child.</em></td>
</tr>
<tr>
<td valign="top" width="48%"><strong>Onomatopoeia</strong>: A word that mimics a sound.

<em>E.g. I could hear the p<span style="text-decoration: underline">itter patter of</span> tiny feet.  Waves <span style="text-decoration: underline">crashed</span> against rocks.</em></td>
<td width="4%"></td>
<td width="48%"><strong>Personification: </strong>When objects are given human qualities.

<em>E.g. Autumn leaves <span style="text-decoration: underline">danced</span> across the street.  His grumbling stomach was <span style="text-decoration: underline">begging</span> for food.</em></td>
</tr>
<tr>
<td valign="top" width="48%"><strong>Oxymoron</strong>: Words that are opposite or contradict each other.

<em>E.g. We have a <span style="text-decoration: underline">love-hate</span> relationship. It was <span style="text-decoration: underline">seriously funny</span>.</em></td>
<td width="4%"></td>
<td width="48%"><strong>Irony</strong>: Words that mean the opposite of what you think. It can sometimes sound like sarcasm.

<em>E.g. Wow, I <span style="text-decoration: underline">can''t wait</span> for that test! That meal was <span style="text-decoration: underline">soooo</span> delicious.  I just <span style="text-decoration: underline">love it</span> when dogs drool on me.</em></td>
</tr>
<tr>
<td valign="top" width="48%"><strong>Allusion</strong>: An illusion makes a reference to something that most people understand.  It''s often used in a simile or metaphor.

<em>E.g. It will sink, like the <span style="text-decoration: underline">Titanic</span>.  She is such a <span style="text-decoration: underline">Scrooge</span> and never offers to pay.  Chocolate is my <span style="text-decoration: underline">kryptonite</span>.</em></td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong><strong>Criteria and Rubrics</strong>: Ask your teacher for set criteria or a rubric to guide you as you write and revise.  The criteria will vary depending on the purpose and text type (narrative, poem).

<img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Revision%20and%20Editing/Criteria%20or%20Rubric.png" width="68%"  /></td>
<td width="4%"></td>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Rest and Revisit</strong>:  Don''t revise and edit in one go.  Take breaks so you can look at your writing with fresh eyes. You''ll be amazed at how much easier and clearer the revision process is after you''ve stepped away from your writing.

&nbsp;

<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Deep Peer Questions: </strong>Read your piece aloud to a peer and ask them the questions below.  Make sure you write down their responses. Use this information to see if their feedback aligns with your intentions as a writer and to make any revisions.
<ul>
 	<li>What''s the most important part and why?</li>
 	<li>How did the writing make you feel and why?</li>
 	<li>Finish these sentence beginnings about this piece of writing: I think... I was surprised... I wondered...</li>
</ul>
</td>
</tr>
</tbody>
</table>');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Read the first paragraph of popular novels by great authors, study what they do and <strong>imitate their character descriptions</strong>.  Do not copy, just borrow ideas.

<strong>For example:</strong> <span style="color: #993300"><em>He was a big, beefy man with hardly any neck</em> <span style="color: #000000">- J.K. Rowling, Harry Potter.</span>  </span>

<span style="color: #993300"><strong><span style="color: #000000">Your version might be:</span></strong>  <em>She was a frail, old lady who barely moved</em>.</span></td>
<td width="4%"></td>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Focus on one important/interesting fact </strong>and build on it with additional information. E.g.  <span style="color: #993300"><em>Danny wore shorts all year round - even in winter.  He said he never felt the cold, but the truth was, they were so poor, he could only buy long pants once every three years.  If only he could stop growing, just for one year.</em></span></td>
</tr>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>List interesting facts about your character - <em><strong>Personality</strong> </em>(angry, calm, giving), <em><strong>physical</strong> <strong>features</strong></em> (interesting things like, <span style="color: #993300"><em>she had wiry grey hair that stuck out in all directions</em></span>), how are they <em><strong>connected to other characters</strong></em> (younger brother, best friend), interesting facts about their <em><strong>past </strong>(He never smiled, not even as a child). </em></td>
<td width="4%"></td>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Include a <strong>flashback</strong> about your character to describe their motivations.  <span style="color: #993300"><em>Claire froze, as ocean water crept towards her toes.  Her heart pounded.  She remembered falling in a lake near her grandparents home as a child.</em> </span></td>
</tr>
</tbody>
</table>');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Read the first paragraph of popular novels by great authors, study what they do and <strong>imitate their sentence structures and character descriptions</strong>.  Do not copy, just borrow ideas.

<strong>For example:</strong> <em>He was a big, beefy man with hardly any neck</em> - J.K. Rowling, Harry Potter.

<strong>Your version might be:</strong> <em>She was a frail, old lady who barely moved</em>.</td>
<td width="4%"></td>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong><span style="color: #000000">Begin with one of the following:</span>
<ul>
 	<li><strong><span style="color: #000000">Dialogue</span></strong></li>
 	<li><strong><span style="color: #000000">A surprising fact</span></strong></li>
 	<li><strong><span style="color: #000000">Something funny, talk to the reader </span></strong><span style="color: #000000">("You probably won''t believe me when I tell you...")</span></li>
 	<li><strong><span style="color: #000000">A sad fact </span></strong><span style="color: #000000">(I have been poor my whole life.)</span></li>
</ul>
</td>
</tr>
</tbody>
</table>');
INSERT INTO strategies(strategy_Desc) VALUES ('<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Modal Words:</strong> To make your opinion in your writing clear and persuasive, think carefully about the types of words you chose that express, for example, how certain you are (could, might) or how frequently something occurs (often, rarely).  Below is a list to get started.

If you are wanting to persuade your reader, use high modality words.  For example, ''We <strong><em>must</em> </strong>act on climate change.''

&nbsp;

<img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Modality/Modal%20word%20list.png" width="100%"  />');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>For <strong>narrative</strong> or <strong>recount</strong> writing start a new paragraph when the following changes:
<ul>
 	<li><strong>Topic</strong>: When you''re talking about a new idea start a new paragraph. (<em>I went for a bike ride with my friend</em>).</li>
 	<li><strong>Time</strong>: When the time changes (<em>Later that day, The next day, On Monday, In the morning</em>).</li>
 	<li><strong>Place</strong>: When the setting or place changes (<em>Back at the farm...</em>).</li>
 	<li><strong>Person</strong>: If you''re introducing a new person, or a new person is speaking change paragraphs.</li>
</ul>
</td>
<td width="4%"></td>
<td valign="top" width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>For <strong>Informational</strong> writing, start a new paragraph when the topic changes.  Each paragraph should have a topic sentence and supporting details.Most non-fiction paragraphs have three parts:
<ol>
 	<li>Topic sentence or what the paragraph is about.</li>
 	<li>Details about the topic.</li>
 	<li>An example or evidence.</li>
</ol>
</td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('Use the following strategies to make your middle or important parts longer and more descriptive.
<table>
<tbody>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong><strong>Show don''t Tell: </strong>Describe what is happening or how people are feeling rather than telling. For example:
<ul>
 	<li><strong>Telling: </strong>''<em>He ran fast.''</em></li>
 	<li><strong>Showing: </strong><em>''Sam bolted down the street, not looking behind him.  His heart was pounding and sweat dripped down his red face.''</em></li>
</ul>
</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Rule of Three:</strong> Describe something with three details.

E.g. <em>''It was a wet, dark and windy day''. ''When I closed my eyes, I heard the <span style="text-decoration: underline">wind howling</span>, <span style="text-decoration: underline">children laughing</span><span style="text-decoration: underline"> and </span><span style="text-decoration: underline">dogs barking</span> in the distance''. </em></td>
<td width="4%"></td>
<td width="48%"><img src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Pacing/Text%20sample%20upper.png" width="100%" /></td>
</tr>
<tr>
<td width="48%"><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span>Snapshot:  </strong>Write down every detail to highlight an important moment.

E.g. ''Tom<em> cautiously looked over his left shoulder and without drawing attention to himself, slowly picked up the bag.  With his eyes fixed on the front door, and heart-pounding, he gently unzipped the backpack</em>''.</td>
<td width="4%"></td>
<td width="48%"></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('<h3 style="text-align: center"><strong>Punctuation Rules and Examples</strong></h3>
<img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Punctuation/L7.png" width="90%"  />');
INSERT INTO strategies(strategy_Desc) VALUES ('Connectives List:
<ul>
 	<li><strong>Time</strong>: Meanwhile, since.</li>
 	<li><strong>Adding information</strong>: in addition, furthermore, not only that, another thing.</li>
 	<li><strong>Opposing view</strong>: However, whilst, on the other hand.</li>
 	<li><strong>List</strong>: To begin with, in summary, on the whole.</li>
 	<li><strong>Explaining</strong>:  In other words, For instance, For example, Equally important.</li>
 	<li><strong>Compare </strong>and <strong>c</strong><strong>ontrast ideas</strong>: although, yet, alternatively, similarly.</li>
</ul>');
INSERT INTO strategies(strategy_Desc) VALUES ('tbc');
INSERT INTO strategies(strategy_Desc) VALUES ('<table>
<tbody>
<tr>
<td valign="top" width="48%"><b><strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" />  </span></strong>Imitate Sentence Structures: </b>Record sentences you love and think are interesting.  Analyse how the author has crafted sentences and copy all of or parts of the structure using different words to create your own interesting sentences.  You can analyse sentences on whiteboards or in your book.</td>
<td width="4%"></td>
<td valign="top" width="48%">Have a go at analysing Patricia MacLachlan''s quotes.  Her sentences contain different types of punctuation, similes, the rule of three, subordinate and independent clauses, precise nouns and verbs.

<img class="aligncenter" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Different%20types%20of%20Sentences/Analyse%20Sentence%20example%20final.png" width="100%"  /></td>
</tr>
</tbody>
</table>
&nbsp;');
INSERT INTO strategies(strategy_Desc) VALUES ('tbc');
INSERT INTO strategies(strategy_Desc) VALUES ('<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" /> </span>Story Map</strong>: Write the beginning, middle and ending of your story in a graphic organiser.

<img class="alignleft" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Sequencing/Story%20Map.png" width="70%"  />

&nbsp;

&nbsp;

&nbsp;

&nbsp;

&nbsp;

&nbsp;

&nbsp;

<strong><span style="color: #000000"><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="21" height="21" /> </span></strong><span style="color: #000000">Use the traffic light connectives list to help you sequence your ideas. </span>

<img class="alignleft" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Sequencing/Traffic%20lights%20sequencing%20L1.png" width="65%"  />');
INSERT INTO strategies(strategy_Desc) VALUES ('<span style="color: #000000"><strong><img class="" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/pencil.png" width="24"  /></strong> 1. Choose a person or place you want to describe in detail.</span>

2. Draw a <strong>five senses organiser</strong> to describe your person or place.

3. Describe your person or place using <strong>adjectives </strong>(describing words).

4. Then add this detail to your writing.

<img class="alignleft" src="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Goals%20Sheets%20for%20Students/Elaborating%20Ideas/Five%20senses%20L1%20Rev1-1.png" width="708"  />');
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (26,1);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (31,2);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (32,3);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (34,4);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (35,5);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (39,6);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (41,7);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (43,8);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (46,9);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (50,10);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (51,11);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (52,12);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (53,13);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (54,14);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (55,15);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (56,16);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (59,17);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (60,18);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (61,19);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (62,20);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (63,21);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (64,22);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (65,23);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (66,24);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (67,25);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (69,26);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (70,27);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (71,28);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (73,29);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (74,30);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (75,31);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (80,32);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (81,33);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (82,34);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (83,35);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (84,36);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (85,37);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (86,38);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (88,39);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (89,40);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (90,41);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (91,42);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (92,43);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (93,44);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (94,45);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (95,46);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (96,47);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (98,48);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (99,49);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (100,50);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (102,51);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (103,52);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (104,53);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (106,54);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (110,55);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (111,56);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (112,57);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (113,58);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (114,59);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (115,60);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (117,61);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (118,62);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (119,63);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (120,64);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (121,65);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (122,66);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (123,67);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (124,68);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (125,69);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (127,70);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (128,71);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (129,72);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (131,73);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (132,74);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (133,75);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (135,76);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (139,77);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (140,78);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (141,79);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (142,80);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (143,81);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (144,82);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (146,83);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (147,84);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (148,85);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (149,86);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (150,87);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (151,88);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (152,89);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (154,90);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (155,91);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (156,92);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (158,93);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (159,94);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (160,95);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (161,96);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (165,97);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (166,98);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (167,99);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (168,100);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (169,101);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (170,102);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (173,103);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (174,104);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (175,105);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (176,106);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (177,107);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (178,108);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (180,109);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (181,110);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (183,111);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (184,112);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (185,113);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (189,114);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (190,115);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (191,116);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (192,117);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (193,118);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (194,119);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (196,120);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (197,121);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (198,122);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (199,123);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (200,124);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (203,125);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (204,126);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (27,127);
INSERT INTO skills_levels_strategies(skills_levels_Id,strategies_Id) VALUES (36,128);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (1,26);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (2,31);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (3,32);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (4,34);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (5,35);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (6,39);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (7,41);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (8,43);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (9,46);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (10,50);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (11,51);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (12,52);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (13,53);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (14,54);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (15,55);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (16,56);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (17,59);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (18,60);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (19,61);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (20,62);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (21,63);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (22,64);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (23,65);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (24,66);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (25,67);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (26,69);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (27,70);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (28,71);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (29,73);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (30,74);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (31,75);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (32,80);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (33,81);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (34,82);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (35,83);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (36,84);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (37,85);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (38,86);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (39,88);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (40,89);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (41,90);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (42,91);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (43,92);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (44,93);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (45,94);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (46,95);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (47,96);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (48,98);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (49,99);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (50,100);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (51,102);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (52,103);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (53,104);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (54,106);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (55,110);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (56,111);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (57,112);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (58,113);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (59,114);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (60,115);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (61,117);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (62,118);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (63,119);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (64,120);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (65,121);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (66,122);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (67,123);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (68,124);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (69,125);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (70,127);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (71,128);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (72,129);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (73,131);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (74,132);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (75,133);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (76,135);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (77,139);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (78,140);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (79,141);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (80,142);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (81,143);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (82,144);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (83,146);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (84,147);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (85,148);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (86,149);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (87,150);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (88,151);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (89,152);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (90,154);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (91,155);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (92,156);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (93,158);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (94,159);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (95,160);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (96,161);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (97,165);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (98,166);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (99,167);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (100,168);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (101,169);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (102,170);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (103,173);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (104,174);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (105,175);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (106,176);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (107,177);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (108,178);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (109,180);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (110,181);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (111,183);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (112,184);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (113,185);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (114,189);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (115,190);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (116,191);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (117,192);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (118,193);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (119,194);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (120,196);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (121,197);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (122,198);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (123,199);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (124,200);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (125,203);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (126,204);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (127,27);
INSERT INTO skills_levels_student_defs(student_definitions_Id,skills_levels_Id) VALUES (128,36);