.. include:: Images.txt

Introduction
============

.. only:: html

	:ref:`what` | :ref:`compatibility` | :ref:`screenshots` |

.. _what:

What does it do?
----------------

cmd_treehide is a small extension designed to add possibility to hide
an entire tree at once. It work on the scheme than recursive delete.
Configure for each backend user in his profile.
All you have to do is to check the corresponding checkbox.

Some basic points:

- It does not take care of already hidden page, if we hide, then unhide a tree
  all subpage will be unhidded. There is no way to now if a page was previously hidden

- It hide only the page, not the content. Not the records too (or the translation).



.. _compatibility:

Compatible TYPO3 versions
-------------------------

This extension is compatible with both LTS version (and all version between them). That include TYPO3 4.5LTS, 4.7, 6.0, 6.1 and TYPO3 6.2LTS.


.. _screenshots:

Screenshots
-----------


Backend: The tree not hidden yet
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

|tree-active|

Example showing all tree active.


Backend: The tree hidden
^^^^^^^^^^^^^^^^^^^^^^^^

|tree-inactive|

Example showing after a single click that the entire tree is now hidden
